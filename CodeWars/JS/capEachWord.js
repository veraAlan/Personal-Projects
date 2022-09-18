/**
 * Activity:
 * https://www.codewars.com/kata/5390bac347d09b7da40006f6
 */

String.prototype.toJadenCase = function () {
    var words = this.split(' ')

    words.forEach(function (word, index) {
        this[index] = word.slice(0, 1).toUpperCase() + word.slice(1)
    }, words)

    return words.join(' ')
};

var str = "A phrase that has some words."
console.log(str.toJadenCase())