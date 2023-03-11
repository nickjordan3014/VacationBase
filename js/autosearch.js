// checks for value on page load in search bar (passed from homepage search most likely)
// if there's a value it submits the form
// great cause it automates it, bad bc it has to do two page loads to search from homepage now :(
// we'll fix during next milestone  -sean
window.onload = function() {
    var onLoadInput = document.getElementById('mainSearchForm');
    var inputValue = onLoadInput.searchbar.value;
    console.log(inputValue);
    if (inputValue) {
        document.getElementById('mainSearchForm').submit();
    }
};
