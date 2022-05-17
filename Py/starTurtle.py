"""
Created on Sat Jul 17 02:10:00 2021

@author: alan_
"""
#Import statement
import turtle
import math

#Turtle // canvas declaration
wn = turtle.Screen()
turtle.setup(400,400)

#Declare vars and input the number of sides
sides = int(input("Number of sides: "))
angle = 360 / sides
length = 800 / sides

#Computing triangle sides
#Inner angles
aAngle = 90 / sides
bAngle = 90 - aAngle
cosine = math.cos(math.degrees(aAngle))
hypotenuse = length / cosine

#Debugging values
print("Sides: " + str(sides))
print("Inicial angle: " + str(angle))
print("Length: " + str(length))
print("aAngle: " + str(aAngle))
print("bAngle: " + str(bAngle))
print("Cosine: " + str(cosine))
print("Hypote: " + str(hypotenuse))

"""
How tf do you get the Hypotenuse with the angle and adjacent side
print("H: " + str(function)))
"""

#myTurtle var + shape loop
myTurtle = turtle.Turtle()
for i in range(sides):
    myTurtle.forward(length)
    myTurtle.left(angle)

#myTurtle star loop
for i in range(sides):
    myTurtle.left(aAngle)
    myTurtle.forward(hypotenuse)
    myTurtle.right(aAngle + (90-bAngle))
    myTurtle.forward(hypotenuse)
    myTurtle.left(aAngle)
    myTurtle.left(angle)

#End turtle
turtle.mainloop()
turtle.done()
turtle.bye()