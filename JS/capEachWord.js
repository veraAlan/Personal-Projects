String.prototype.toCamelString = function () {
    var words = this.split(' ')

    words.forEach(function (word, index) {
        this[index] = word.slice(0, 1).toUpperCase() + word.slice(1)
    }, words)

    return words.join(' ')
};

var str = "A phrase that has some words."
console.log(str.toCamelString())