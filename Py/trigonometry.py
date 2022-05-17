# -*- coding: utf-8 -*-
"""
Created on Sat Jul 17 03:18:56 2021

@author: alan_
"""

import turtle
import math

#Turtle // canvas declaration
wn = turtle.Screen()
turtle.setup(400,400)

#Declaration
b = 75
A = 15
B = 75
hypotenuse = b * math.cos(A)
a = b * math.tan(math.degrees(B))

#myTurtle var + shape loop
myTurtle = turtle.Turtle()
myTurtle.forward(b)
myTurtle.left(90)
myTurtle.forward(a)
myTurtle.left(B)
myTurtle.forward(hypotenuse)
myTurtle.left(A)

#End turtle
turtle.mainloop()
turtle.done()
turtle.bye()