var countBits = function (n) {
    var b = 0

    while (n >= 1) {
        if (n % 2 == 1) {
            b++
            n--
        }
        n /= 2
    }

    return b
};

// Shows the count of every single 1 in binary of a decimal number
console.log(countBits(398475))