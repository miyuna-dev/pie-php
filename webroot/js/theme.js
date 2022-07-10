/*============= DARK LIGHT THEME =============*/
const themeBtn = document.getElementById('theme-btn')
const darkTheme = 'dark-theme'
const iconTheme = 'ri-sun-line'

// Previously selected theme
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// Current theme
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => document.body.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

// Validate class if user picked theme
if (selectedTheme) {
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    themeBtn.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
}

// Activate theme btn
themeBtn.addEventListener('click', () => {
    // add or remove theme & icon
    document.body.classList.toggle(darkTheme)
    themeBtn.classList.toggle(iconTheme)  
    // save theme & icon
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})
