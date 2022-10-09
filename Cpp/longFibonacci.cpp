#include <iostream>
#include <sstream>
#include <math.h>
using namespace std;

void longFibonacci(int fnCount)
{
    string prevNum = "0", nextNum = "1";

    cout << "0. " << prevNum << endl;
    if (fnCount > 0)
    {
        cout << "1. " << nextNum << endl;
        for (int i = 2; i < fnCount + 1; i++)
        {
            if (prevNum.length() < 18 || nextNum.length() < 18)
            {
                int unsigned long long longPrev = stoull(prevNum, nullptr, 10);
                int unsigned long long longNext = stoull(nextNum, nullptr, 10);
                unsigned long long result = longPrev + longNext;

                cout << i << ". " << result << endl;
                prevNum = to_string(longNext);
                nextNum = to_string(result);
            }
            else
            {
                int maxDigits = nextNum.length() / 18;
                int mod = nextNum.length() % 18;
                int index;

                // If there is 1 less digit in prevNum, add a 0 to first position.
                if (prevNum.length() % 18 != mod)
                {
                    prevNum = "0" + prevNum;
                }

                // Create pointers for arrays with max needed size.
                string *prevULLs = new string[maxDigits + (mod != 0)];
                string *actualULLs = new string[maxDigits + (mod != 0)];
                string result = "";

                // Load first digits in groups of 18.
                for (index = 0; index < maxDigits; index++)
                {
                    prevULLs[index] = prevNum.substr(index * 18, 18);
                    actualULLs[index] = nextNum.substr(index * 18, 18);
                }

                // Add last group of digits.
                if (mod != 0)
                {
                    prevULLs[index] = prevNum.substr(index * 18, mod);
                    actualULLs[index] = nextNum.substr(index * 18, mod);
                }

                // Use auxResult to add values for each group and determine if there is a carryout for next group to be added.
                string auxResult = "";
                int carryout = 0;
                for (index = maxDigits + (mod != 0) - 1; index >= 0; index--)
                {
                    // Add using max unsigned long long value, without overflowing.
                    auxResult = to_string(stoull(prevULLs[index]) + stoull(actualULLs[index]) + carryout);
                    carryout = 0;
                    if (index != 0)
                    {
                        // Check if there's a carry out (Doesn't check for last sum, since its the last group and first digits)
                        if (auxResult.length() > actualULLs[index].length())
                        {
                            carryout = stoi(auxResult.substr(0, 1));
                            auxResult = auxResult.substr(1);
                        }
                        // Check if there's a zero between this group and next one.
                        if (auxResult.length() < actualULLs[index].length())
                        {
                            auxResult = "0" + auxResult;
                        }
                    }

                    result = auxResult + result;
                }

                cout << i << ". " << result << endl;
                prevNum = nextNum;
                nextNum = result;
            }
        }
    }
}

int main()
{
    int count;
    cout << "How many numbers of the Fibonacci sequence do you want? (There's no limit now ;) ) : ";
    cin >> count;
    cout << endl;

    longFibonacci(count);
}