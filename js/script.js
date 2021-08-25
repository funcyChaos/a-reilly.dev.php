const navBar = document.getElementById('nav-id');

function navToggle()
{
	if (navBar.className === 'column nav-items')
	{
			navBar.classList.add('hide')

			navBar.style.height = 0;
			navBar.style.opacity = 0;
	}
	else
	{
			navBar.classList.remove('hide');
			navBar.style.height = menuHeight;
			navBar.style.opacity = 1;
	}
}

window.addEventListener('resize', event =>
{
	if (window.innerWidth > largeBreakpoint)
	{
		document.getElementById('nav-id').classList.remove('hide');
	}
	else document.getElementById('nav-id').classList.add('hide');
});