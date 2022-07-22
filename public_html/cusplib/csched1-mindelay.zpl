# csched1-mindelay.zpl
# A ZIMPL model to solve cumulative scheduling problems from CuSPLIB
# using an MIP formulation with time-indexed variables.
# It reads CuSPLIB files in the ZIMPL format generated by geninst.pl.
# Author: Tallys Yunes

param N := read "csched.dat" as "1n" use 1 comment "#";
param T := read "csched.dat" as "1n" skip 1 use 1 comment "#";
param Cap := read "csched.dat" as "1n" skip 2 use 1 comment "#";

set Jobs := {1..N};
set Times := {0..T};

param P[Jobs] := read "csched.dat" as "<1n> 2n" skip 3 use N comment "#";
param R[Jobs] := read "csched.dat" as "<1n> 3n" skip 3 use N comment "#";
param D[Jobs] := read "csched.dat" as "<1n> 4n" skip 3 use N comment "#";
param C[Jobs] := read "csched.dat" as "<1n> 5n" skip 3 use N comment "#";
param W[Jobs] := read "csched.dat" as "<1n> 6n" skip 3 use N comment "#";

set TJ[<j> in Jobs] := {<t> in Times with R[j] <= t and t <= D[j]-P[j]};

var x[<j,t> in Jobs cross Times with R[j] <= t and t <= D[j]-P[j]] binary;
var z[<t> in {0..T}] >= 0 <= Cap;
var s[<j> in Jobs] >= R[j] <= D[j]-P[j];
var delay[<j> in Jobs] >= 0 <= D[j]-P[j]-R[j];

minimize totdelay: sum <j> in Jobs : W[j]*delay[j];

subto c00:
	z[0] == sum <j> in Jobs with R[j] == 0: C[j]*x[j,0];

subto c01: forall <t> in {1..T} do
	z[t] == z[t-1]
                + sum <j> in Jobs with R[j] <= t and t <= D[j]-P[j]: C[j]*x[j,t]
                - sum <j> in Jobs with R[j]+P[j] <= t and t <= D[j]: C[j]*x[j,t-P[j]];

subto c02: forall <j> in Jobs do
        s[j] == sum <t> in TJ[j]: t*x[j,t];

subto c03: forall <j> in Jobs do
        delay[j] >= s[j] - R[j];

subto c04: forall <j> in Jobs do
	sum <t> in TJ[j]: x[j,t] == 1;
