import sys
from mpmath import *

mp.dps = 100000; mp.pretty = True

A = 1;
B = 1/sqrt(2)
T = 1/4;
P = 1;

for x in range(0, 32):

	An = (A+B)/2
	Bn = sqrt(A*B)
	Tn = T-P*power(A-An,2)
	Pn = 2*P

	A = An;
	B = Bn;
	T = Tn;
	P = Pn;


pi = power(A+B,2)/(4*T)

print (pi)
