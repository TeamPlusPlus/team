# Pin the navigation to the top
$(document).ready(()->
	# Get the offset of the navigation on the page
	offsetTop = $("nav").offset().top;
	
	# Function to check the current position
	navFix = ()->
		if($(window).width() <= 600)
			# On mobile devices, the navigation is not pinned
			return false;
		
		# Check whether it is on the screen
		if(-$('.wrapper').offset().top > offsetTop)
			$("nav").addClass("fixed");
		else
			$("nav").removeClass("fixed");
	
	# Check for a change when scrolling
	$('body').scroll(navFix);
	
	# Check once when loading the page
	navFix();
);

# AJAXification
$(document).ready(()->
	initialUrl = document.location.href;
	firstPopState = true;
	
	# Load new content
	load = (url)->
		# Disable current page
		$('.main').css('opacity', 0);
		$('.active').removeClass('active');
		$('.open').removeClass('open');
		
		# Get the new content
		$.get(url, (result)->
			# Split between meta data and content
			elements = result.split("\nSEPARATOR----SEPARATOR\n");
			
			# Split meta data between title and navigation
			meta = elements[0].split("\n");
			title = meta[0];
			navi = meta[1].split(" || ");
			
			# Get the content
			html = elements[1];
			
			setTimeout(()->
				# Set title
				$('title').html(title);
				
				# Activate navigation
				$('nav a[href="' + navi[0] + '"]').addClass(navi[1]);
				
				# Add the page to the history
				history.pushState(null, null, url);
				
				# Set the content
				$('.main').html(html);
				$('.main').css('opacity', 1);
			, 300);
		);
	
	# User clicks back/forward button
	$(window).on('popstate', (e)->
		if(document.location.href == initialUrl && firstPopState)
			# Page loads the first time
			firstPopState = false;
			return;
		
		# Load the page
		load(location.pathname + location.search);
	);
	
	# User clicks a link
	$('header a, .links a').click(()->
		load($(this).attr('href'));
		
		# Don't reload
		return false;
	);
);