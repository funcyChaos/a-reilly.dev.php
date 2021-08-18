const navToggle = () =>
{
	const navBar = document.getElementById('nav-id');

	if (navBar.className === 'column nav-items')
	{
			navBar.classList.add('hide')
	}
	else
	{
			navBar.classList.remove('hide');
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