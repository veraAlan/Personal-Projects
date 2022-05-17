# -*- coding: utf-8 -*-
"""
Created on Wed Jul 28 21:43:04 2021

@author: alan_
"""

def printLoop(arr):
    for i in arr:
          print(i, ", ", end = '')
    print("\n")

prime = [2]

def sieveEras(n):
    n = int(input("Input the max number: "))
    for i in range(3, n+1):
        prime.append(i)
    
    p = 2
    while len(prime) > p:
        for i in range(2, int(n/p) + 1):
            if prime.count(p * i):
                prime.remove(p * i)
        p = prime[(prime.index(p) + 1)]