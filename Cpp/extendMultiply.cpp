#include <iostream>;
#include <string>;
using namespace std;

// Cut strings into parts that can be less than long long max after multiplication.
string multiplyy(string x, string y)
{
}

void main()
{
    string x, y; // numbers

    cin >> x;
    cin >> y;

    cout << multiplyy(x, y);

    cout << stoi(x) * stoi(y);
}