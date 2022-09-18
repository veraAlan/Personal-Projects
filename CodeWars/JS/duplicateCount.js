/**
 * Activity:
 * https://www.codewars.com/kata/54bf1c2cd5b56cc47f0007a1
 */

function duplicateCount(text) {
    let array = text.split('').sort()
    var checkChar = array[0]
    var count = 0, repeated = false

    for (var i = 1; i < array.length; i++) {
        if (checkChar == array[i] && !repeated) {
            count++
            repeated = true
        } else if (checkChar != array[i]) {
            checkChar = array[i]
            repeated = false
        }
    }

    return count
}

test = "zxaybacatab"

console.log(test)
console.log(duplicateCount(test))