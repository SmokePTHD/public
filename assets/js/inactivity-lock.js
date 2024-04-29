var inactiveLimit = 10 * 60 * 1000; 

function redirectToLockScreen() {
    window.location.href = "./pages/authentication/card/lock-screen.php";
}

var timer = setTimeout(redirectToLockScreen, inactiveLimit);

document.addEventListener('mousemove', resetTimer);
document.addEventListener('keypress', resetTimer);

function resetTimer() {
    clearTimeout(timer);
    timer = setTimeout(redirectToLockScreen, inactiveLimit);
}
