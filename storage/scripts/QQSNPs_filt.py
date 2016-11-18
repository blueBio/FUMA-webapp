#!/usr/bin/python

import sys
import os
import pandas as pd
import numpy as np
import math

filedir = sys.argv[1]
width = 300 #px
height = 300 #px

obsP = []

f = open(filedir+"input.snps", 'r')
f.readline()
for l in f:
	l = l.rstrip()
	l = l.split("\t")
	obsP.append(float(l[5]))
f.close()
obsP.sort(reverse=True)

N=len(obsP)
step = (1-1/float(N))/float(N)

expP = []
for i in range(0, N):
	expP.append(1-float(i)*step)

obsP = -np.log10(obsP)
expP = -np.log10(expP)
xMax = max(expP)
yMax = max(obsP)
l = xMax/width
h = yMax/width

mat = np.column_stack((expP, obsP))
mat = np.array(mat)
plot = []
plot.append(['exp', 'obs'])
#print mat[0:3]

cur_x = 0
while cur_x < xMax:
	cur_h = 0
	while cur_h < 5:
		temp = mat[mat[:,0]>=cur_x]
		temp = temp[temp[:,0]<cur_x+l]
		temp = temp[temp[:,1]>=cur_h]
		temp = temp[temp[:,1]<cur_h+h]
		if temp.shape[0]==0:
			cur_h += h
			continue
		elif temp.shape[0]>2:
			#print temp.shape
			temp = temp[np.random.randint(temp.shape[0], size=2)]
		for i in temp:
			plot.append(i.tolist())
		cur_h += h
	cur_x += l

for i in mat[mat[:,1]>=5]:
	plot.append(i.tolist())

outfile = open(filedir+"QQSNPs.txt", 'w')
outfile.write("\t".join(plot[0])+"\n")
plot = plot[1:]
for i in plot:
	outfile.write(str(i[0])+"\t"+str(i[1])+"\n")

