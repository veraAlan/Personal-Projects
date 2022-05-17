"""
Created on Sun Jul 18 13:09:06 2021

@author: alan_
"""

import turtle

turtle.ht()
s = turtle.getscreen()
t = turtle.Turtle()
t.clear

#Defining concurrent functions
def tp():
    t.penup()
    t.setpos(origin,origin)
    t.pendown()

def long_arrow(): 
    t.forward(graphLength)
    t.right(45)
    t.forward(-5)
    t.forward(5)
    t.left(90)
    t.forward(-5)
    t.forward(5)
    tp()

#Var initialization & computing
graphLength = int(input("Insert the size of the graph: "))
"\n"
origin = -graphLength/2
index = int(input("Insert how much divitions should it axis have: "))
"\n"
distanceBIndex = graphLength / index

#Cartesian x & y arrows
t.pensize(3)
tp()
long_arrow()
t.seth(90)
long_arrow()

#Indexing arrows with units
t.pensize(1)
for i in range(2):
    for indexes in range(index):
        if i == 0:
            t.setpos(origin, origin + (indexes * distanceBIndex))
            t.seth(0)
        else:
            t.setpos(origin + (indexes * distanceBIndex), origin)
            t.seth(90)
        t.fd(-(graphLength/50))
        tp()

turtle.mainloop()
turtle.done()
turtle.bye()