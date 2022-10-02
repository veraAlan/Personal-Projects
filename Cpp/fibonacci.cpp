#include <iostream>
using namespace std;

void fibonacci(int fnCount)
{
    unsigned long long prevNum = 0, nextNum = 1;

    cout << prevNum;
    if (fnCount > 0)
    {
        cout << endl;
        cout << nextNum;
        for (int i = 1; i < fnCount; i++)
        {
            cout << endl;
            cout << (prevNum + nextNum);
            prevNum > nextNum ? nextNum += prevNum : prevNum += nextNum;
        }
    }
    cout << endl;
}

int main()
{
    int count;
    cout << "How many numbers of the Fibonacci sequence do you want? (up to 93 numbers after getting to maximum digits) \n";
    cin >> count;

    fibonacci(count);
}