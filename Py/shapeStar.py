"""
Created on Sat Jul 17 23:24:46 2021

@author: alan_
"""

#Turtle declaration
import turtle

s = turtle.getscreen()
t = turtle.Turtle()
turtle.hideturtle()
turtle.speed(0)
turtle.tracer(0,250)

#Var initialation
#Input
sides = int(input("How many sides? Greater than 1 sides\n"))
steepness = float((input("\nHow steep should the star sides be? (narrow to wide spikes = 1-100)\n")))
steepness /= 100
initialSteepness = float((input("\nWhere should the stars start?\n\t1 close to center of shape\n\t50 in the middle\n\t96 close the shape sides\n")))
initialSteepness /= 100
limit = int(input("\nHow many stars should I draw?\n"))
count = int(input("\nHow many dots should I draw per line?\n"))
"\n"
#Computing var values
import math

step = initialSteepness - steepness
step /= limit
sideLength = 2400 / sides - 1
base = sideLength / 2
shapeAngle = 360 / sides
posDistance = -sideLength/1.5
t.setpos(posDistance,posDistance)
t.clear()

#Shape drawing
for i in range(sides):
    t.forward(sideLength)
    t.left(shapeAngle)
    turtle.update()
    
""" Initial Star Function
#Star drawing inside of shape
for i in range(sides):
    t.left(starAngle)
    t.forward(starSideLength)
    t.right(starAngle * 2)
    t.forward(starSideLength)
    t.left(starAngle + shapeAngle)
"""

#Wide to narrow star spikes inside shape
t.penup()
for i in range(limit):
    starAngle = math.degrees(initialSteepness - steepness)
    starSideLength = base / math.cos(math.radians(starAngle))
    for i in range(sides):
        t.left(starAngle)
        for i in range(count):
            t.fd(starSideLength/count)
            t.dot(3, "black")
        t.right(starAngle * 2)
        for i in range(count):
            t.fd(starSideLength/count)
            t.dot(3, "black")
        t.left(starAngle + shapeAngle)
    turtle.update()
    steepness += step

turtle.update()
turtle.mainloop()
turtle.done()
turtle.bye()