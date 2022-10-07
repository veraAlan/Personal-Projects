#include <iostream>
#include <math.h>
using namespace std;

void longFibonacci(int fnCount)
{
    string prevNum = "0", nextNum = "1";

    cout << "0. " << prevNum << endl;
    if (fnCount > 0)
    {
        cout << "1. " << nextNum << endl;
        for (int i = 2; i < fnCount; i++)
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
                pmax = (int)(prevNum.length() / 18);
                amax = (int)(nextNum.length() / 18);

                pmod = prevNum.length() % 18;
                amod = nextNum.length() % 18;

                string prevULLs[] = new prevULLs[pmax];
                string actualULLs[] = new actualULLs[amax];

                // TODO Load array depending on pmod and pmax,
                for (int i = 0; i < pmax; i++)
                {
                    prevULLs[i] = prevNum.split();
                }

                // TODO attempt to add digits in groups of 18 dynamically.
                int unsigned long long lprev1, lprev2, lnext1, lnext2;
                int prevLength = prevNum.length(), nextLength = nextNum.length();
                string longPrev[2], longNext[2], result;

                // Set variables for 18 and up digits
                if (prevLength == 18)
                {
                    longPrev[0] = "0";
                    longPrev[1] = prevNum.substr(0, 18);
                    lprev1 = 0;
                    lprev2 = stoull(longPrev[1], nullptr, 10);
                }
                else
                {
                    longPrev[0] = prevNum.substr(0, prevLength - 18);
                    longPrev[1] = prevNum.substr(prevLength - 18, 18);
                    lprev1 = stoull(longPrev[0], nullptr, 10);
                    lprev2 = stoull(longPrev[1], nullptr, 10);
                }

                if (nextLength == 18)
                {
                    longNext[0] = "0";
                    longNext[1] = nextNum.substr(0, 18);
                    lnext1 = 0;
                    lnext2 = stoull(longNext[1], nullptr, 10);
                }
                else
                {
                    longNext[0] = nextNum.substr(0, nextLength - 18);
                    longNext[1] = nextNum.substr(nextLength - 18, 18); // Result of 0 + 17 doesnt sum up well enough
                    lnext1 = stoull(longNext[0], nullptr, 10);
                    lnext2 = stoull(longNext[1], nullptr, 10);
                }

                /*
                Add digits. If adding first digits of both numbers (left side digits)
                and the result is over 18 digits split that result.
                on the contrary sum each numbers
                */
                if (to_string(lprev2 + lnext2).length() == 19)
                {
                    result = to_string(lprev1 + lnext1 + 1);
                    result += to_string(lprev2 + lnext2).substr(1, 18);
                }
                else
                {
                    result = to_string(lprev1 + lnext1);
                    if (result != "0")
                    {
                        result += to_string(lprev2 + lnext2);
                    }
                    else
                    {
                        result = to_string(lprev2 + lnext2);
                    }
                }

                cout << i << ". " << result << endl;

                // Change smaller number to new result of sum.
                if (lprev1 == lnext1)
                {
                    if (lprev2 > lnext2)
                    {
                        nextNum = result;
                    }
                    else
                    {
                        prevNum = result;
                    }
                }
                else
                {
                    lprev1 > lnext1 ? nextNum = result : prevNum = result;
                }
            }
        }
    }
}

int main()
{
    int count;
    cout << "How many numbers of the Fibonacci sequence do you want? (up to 139 for now) : ";
    cin >> count;
    cout << endl;

    longFibonacci(count);
}