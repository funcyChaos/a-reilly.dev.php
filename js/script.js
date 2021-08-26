function navToggle()
{
	if (!isHidden)
	{
		isHidden = true
		navBar.style.height = 0;
		navBar.style.opacity = 0;
	}
	else
	{
		isHidden = false;
		navBar.style.height = menuHeight;
		navBar.style.opacity = 1;
	}
}

function handleResize(event)
{
	if (window.innerWidth > largeBreakpoint)
	{
		navBar.style.height = 'initial';
		navBar.style.opacity = 1;
	}
	else
	{
		navBar.style.height = 0;
		navBar.style.opacity = 0;

		// Setup the dropdown menu height if it's been shrank
		navBar.style.height = 'initial';
		menuHeight = navBar.clientHeight + 'px';
		navBar.style.height = 0;
	}
}

// Maintain functionality during resizes
window.addEventListener('resize', handleResize);

// Temporarily remove event listener to allow keyboard to open
document.getElementById('s').addEventListener('mouseup', () => {
	console.log('text element actiive');
	window.removeEventListener('resize', handleResize);
	setTimeout(() => {
		window.addEventListener('resize', handleResize);
	}, 400);
});
