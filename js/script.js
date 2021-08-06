if(document.getElementById('content').firstElementChild.classList == 'wp-block-image size-large')
{
	document.getElementById('content').firstElementChild.firstElementChild.style.height = 'calc(100vh - 200px)';
	document.getElementById('content').firstElementChild.firstElementChild.style.width = 'auto';
	document.getElementById('content').firstElementChild.style.textAlign = 'center'
}

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
	if (window.innerWidth > 600)
	{
		document.getElementById('nav-id').classList.remove('hide');
	}
	else document.getElementById('nav-id').classList.add('hide');
});