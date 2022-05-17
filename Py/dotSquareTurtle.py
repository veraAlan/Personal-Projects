"""
Created on Sat Jul 17 01:37:10 2021

@author: alan_
"""

import turtle

wn = turtle.Screen()
turtle.setup(400,400)
columns = int(input("Input the columns: "))
rows = int(input("Input the rows: "))
distance = int(input("Input the distance between dots: "))
d = 0

myTurtle = turtle.Turtle()
myTurtle.penup()

for i in range(columns):
    for i in range(rows):
        myTurtle.dot(5)
        myTurtle.forward(distance)
    if d == 0:
        myTurtle.right(90)
        myTurtle.forward(distance)
        myTurtle.right(90)
        myTurtle.forward(distance)
        d += 1
    else:
        myTurtle.left(90)
        myTurtle.forward(distance)
        myTurtle.left(90)
        myTurtle.forward(distance)
        d -= 1

turtle.mainloop()
turtle.done()
turtle.bye()