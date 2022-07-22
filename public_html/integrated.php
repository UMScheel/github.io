<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Web page of Tallys Yunes" />
<meta name="keywords" content="operations,research,integer,constraint,mathematical,programming,integration,hybrid,combinatorial,optimization,scheduling,logistics,heuristic,neighborhood,simpl,university,miami,management,science" />
<meta name="author" content="Tallys Yunes / Original design: Andreas Viklund - http://andreasviklund.com/" />
<link rel="stylesheet" type="text/css" href="mycss.css" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="print.css" media="print" />
<title>Tallys Yunes</title>
</head>

<body><div id="wrap">

<?php include("common.html"); ?>

<div id="content">
<h2>Success Stories in Integrated Optimization</h2>

<B>What Is This List About?</B><BR>
It is a collection of references to papers about optimization
problems that are better solved by a combination of optimization techniques,
rather than using any particular technique in isolation.

<P>

<B>Why Create This List?</B><BR>
People often ask me what makes a
problem more suitable for a hybrid/integrated approach.
Although I think this question still does not have a good general
answer, there are many examples illustrating the power of integration.
As our experience grows and we collect a larger body of empirical
evidence, we will improve our understanding of the underlying
problem characteristics that favor an integrated approach.
This is one of the ultimate goals of my research.

<P>

<B>What Kinds Of Papers Appear In This List?</B><BR>
I am trying to group together papers that address
problems for which integrated approaches deliver significant
improvements in terms of development effort, solution time, resource
requirements (e.g. memory), and so on.

<P>

<B>Why Is XYZ's Paper Not In This List?</B><BR>
I am trying to keep this list
updated, and as complete as possible, to the best of my knowledge and
time availability.
I know that many relevant papers are not
listed below.
If you know a paper that should be included here, please let me know
and I will be happy to add it to the list.

<P>

<B>Credits:</B>
The first version of this list was based on a table compiled by John
N. Hooker in 2005.

<P>

Papers are divided into categories, depending on the type of
integration, and are listed chronologically and sorted alphabetically by first author's last name within a year.

<p>

<hr>

<br>

<h2>Loose Integration of CP and MILP</h2>
<UL>
<LI>
<B>Author(s):</B> <a href="#hajian">Hajian et al. (1996)</a><BR>
<B>Problem:</B> British Airways fleet assignment. CP solver provides
starting feasible solution to MILP.<BR>
<B>Improvement:</B> Twice as fast as MILP; 4 times faster than CP.
<BR><BR>

</UL>

<P>

<h2>CP + MILP-style Relaxations</h2>
<UL>
<LI>
<B>Author(s): </B> <a href="#focacci">Focacci, Lodi and Milano (1999)</a><BR>
<B>Problem:</B> Lesson timetabling. Reduced-cost variable fixing using an assignment problem relaxation.<BR>
<B>Improvement:</B> 2 to 50 times faster than CP. 
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#hookerosorio">Hooker and Osorio (1999)</a><BR>
<B>Problem:</B> Boat party scheduling and flow shop scheduling. Logic processing plus linear relaxation.<BR>
<B>Improvement:</B> Solved 10-boat instance in 5 minutes that MILP could not solve in 12 hours. Solved flow shop instances 4 times faster than MILP.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#refalo">Refalo (1999)</a><BR>
<B>Problem:</B> Piecewise linear costs.<BR>
<B>Improvement:</B> 2 to 200 times faster than MILP. Solved two instances that MILP could not solve.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#bollapragada">Bollapragada, Ghattas and Hooker (2001)</a><BR>
<B>Problem:</B> Nonlinear structural design. Logic processing plus convex relaxation.<BR>
<B>Improvement:</B> Up to 600 times faster than MILP. Solved 2 problems in less than 6 minutes that MILP could not solve in 20 hours.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#sellmann">Sellmann and Fahle (2001)</a><BR>
<B>Problem:</B> Automatic digital recording. CP plus Lagrangean relaxation.<BR>
<B>Improvement:</B> 1 to 10 times faster than MILP, which was faster than CP.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#thorsteinssonottosson">Thorsteinsson and Ottosson (2001)</a><BR>
<B>Problem:</B> Product configuration.<BR>
<B>Improvement:</B> 30 to 40 times faster than MILP, which was faster than CP.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#beck">Beck and Refalo (2003)</a><BR>
<B>Problem:</B> Scheduling with earliness and tardiness costs.<BR>
<B>Improvement:</B> Solved 67 out of 90 instances, while CP solved only 12.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#vanhoeve">Van Hoeve (2003)</a><BR>
<B>Problem:</B> Stable set problems. CP plus semi-definite programming relaxation.<BR>
<B>Improvement:</B> Significantly better suboptimal solutions than CP in a fraction of the time.
<BR><BR>

</UL>

<P>

<h2>CP-based Branch-and-Price</h2>
<UL>
<LI>
<B>Author(s):</B> <a href="#easton">Easton, Nemhauser and Trick (2002)</a><BR>
<B>Problem:</B> Traveling tournament scheduling (baseball).<BR>
<B>Improvement:</B> First to solve 8-team instance to optimality.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#yunesmouradesouza">Yunes, Moura and de Souza (2005)</a><BR>
<B>Problem:</B> Urban transit crew scheduling.<BR>
<B>Improvement:</B> Solved problems with up to 210 trips, while traditional branch-and-price could accommodate only 120 trips.
<BR><BR>

</UL>

<P>

<h2>Integration of CP and MILP in Benders Decomposition</h2>
<UL>
<LI>
<B>Author(s):</B> <a href="#jain">Jain and Grossmann (2001)</a><BR>
<B>Problem:</B> Min-cost planning and disjunctive scheduling. MILP master problem and CP subproblem.<BR>
<B>Improvement:</B> 20 to 1000 times faster than CP and MILP.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#thorsteinsson">Thorsteinsson (2001)</a><BR>
<B>Problem:</B> Same as Jain and Grossmann (2001) problems. Branch-and-check.<BR>
<B>Improvement:</B> An additional factor of 10 over Jain and Grossmann (2001).
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#benoist">Benoist, Gaudin and Rottembourg (2002)</a><BR>
<B>Problem:</B> Call center scheduling. CP master, LP subproblem.<BR>
<B>Improvement:</B> Solved twice as many instances as traditional Benders.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#timpe">Timpe (2002)</a><BR>
<B>Problem:</B> Polypropylene batch scheduling at BASF. MILP master, CP subproblem.<BR>
<B>Improvement:</B> Solved previously insoluble problem in 10 minutes.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#hooker2004">Hooker (2004)</a><BR>
<B>Problem:</B> Min-cost and min-makespan planning and cumulative scheduling. MILP master, CP subproblem.<BR>
<B>Improvement:</B> 100 to 1000 times faster than CP and MILP.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#hooker2005">Hooker (2005)</a><BR>
<B>Problem:</B> Min-tardiness planning and cumulative scheduling. MILP master, CP subproblem.<BR>
<B>Improvement:</B> 10 to over 1000 times faster than CP and MILP when minimizing number of late jobs;
roughly 10 times faster when minimizing total tardiness; much better solutions when suboptimal.
<BR><BR>

<LI>
<B>Author(s):</B> <a href="#rasmussen">Rasmussen and Trick (2005)</a><BR>
<B>Problem:</B> Sports scheduling to minimize number of consecutive home or away games.<BR>
<B>Improvement:</B> Speedup of several orders of magnitude compared to previous state of the art.
<BR><BR>

</UL>

<P>

<h2>References</h2>
<UL>
<LI><a name="beck">C. Beck and P. Refalo.</a> A hybrid approach to scheduling with earliness and tardiness costs. Annals of Operations Research, 118:49-71, 2003.
<BR><BR>

<LI><a name="benoist">T. Benoist, E. Gaudin and B. Rottembourg.</a> Constraint programming contribution to benders decomposition: A case study. Proceedings of the Eigth International Conference on Principles and Practice of Constraint Programming (CP). Lecture Notes in Computer Science 2470, 603-617, 2002.
<BR><BR>

<LI><a name="bollapragada">S. Bollapragada, O. Ghattas and J. N. Hooker.</a> Optimal design of truss structures by mixed logical linear programming. Operations Research 49(1):42-51, 2001.
<BR><BR>

<LI><a name="easton">K. Easton, G. Nemhauser and M. Trick.</a> Solving the traveling tournament problem: A combined integer programming and constraint programming approach. Proceedings of the Fourth International Conference on the Practice and Theory of Automated Timetabling (PATAT), 2002.
<BR><BR>

<LI><a name="focacci">F. Focacci, A. Lodi and M. Milano.</a> Cost-based domain filtering. Proceedings of the Fifth International Conference on Principles and Practice of Constraint Programming (CP). Lecture Notes in Computer Science 1713, 189-203, 1999.
<BR><BR>

<LI><a name="hajian">M. T. Hajian, H. El-Sakkout, M. Wallace, J. M. Lever and
E. B. Richards.</a> Toward a closer integration of
finite domain propagation and simplex-based algorithms.
Proceedings of the Fourth International Symposium on Artificial
Intelligence and Mathematics, 1996.
<BR><BR>

<LI><a name="hooker2004">J. N. Hooker.</a> A hybrid method for planning and scheduling. Proceedings of the Tenth International Conference on Principles and Practice of Constraint Programming (CP). Lecture Notes in Computer Science 3258, 305-316, 2004.
<BR><BR>

<LI><a name="hooker2005">J. N. Hooker.</a> A hybrid method for planning and scheduling. To appear in Constraints, 2005.
<BR><BR>

<LI><a name="hookerosorio">J. N. Hooker and M. A. Osorio.</a> Mixed logical/linear programming. Discrete Applied Mathematics 96-97(1-3):395-442, 1999.
<BR><BR>

<LI><a name="jain">V. Jain and I. E. Grossmann.</a> Algorithms for hybrid MILP/CP models for a class of optimization problems. INFORMS Journal on Computing 13(4):258-276, 2001.
<BR><BR>

<LI><a name="rasmussen">R. Rasmussen and M. Trick.</a> A benders approach for the minimum break scheduling problem. Presented at the INFORMS National Meeting in San Francisco, California, 2005.
<BR><BR>

<LI><a name="refalo">P. Refalo.</a> Tight cooperation and its application in piecewise linear optimization. Proceedings of the Fifth International Conference on Principles and Practice of Constraint Programming (CP). Lecture Notes in Computer Science 1713, 375-389, 1999.
<BR><BR>

<LI><a name="sellmann">M. Sellmann and T. Fahle.</a> Constraint programming based lagrangean relaxation for a multimedia application. Proceedings of the Third International Workshop on Integration of AI and OR techniques in Constraint Programming for Combinatorial Optimization Problems (CP-AI-OR), 2001.
<BR><BR>

<LI><a name="thorsteinsson">E. S. Thorsteinsson.</a> Branch-and-Check: A hybrid framework for integrating mixed integer programming and constraint logic programming. Proceedings of the Seventh International Conference on Principles and Practice of Constraint Programming. Lecture Notes in Computer Science 2239, 16-30, 2001.
<BR><BR>

<LI><a name="thorsteinssonottosson">E. S. Thorsteinsson and G. Ottosson.</a> Linear relaxations and reduced-cost based propagation of continuous variable subscripts. Annals of Operations Research 115:15-29, 2001.
<BR><BR>

<LI><a name="timpe">C. Timpe.</a> Solving planning and scheduling problems with combined integer and constraint programming. OR Spectrum 24:431-448, 2002.
<BR><BR>

<LI><a name="vanhoeve">W. J. Van Hoeve.</a> A hybrid constraint programming and semidefinite programming approach for the stable set problem. Proceedings of the Ninth International Conference on Principles and Practice of Constraint Programming (CP). Lecture Notes in Computer Science 2833, 407-421, 2003.
<BR><BR>

<LI><a name="yunesmouradesouza">T. H. Yunes, A. V. Moura and C. C. de Souza.</a> Hybrid column generation approaches for urban transit crew management problems. Transportation Science 39(2):273-288, 2005.

</UL>


</div>

<?php include("footer.html"); ?>

</div>
</body>
</html>
