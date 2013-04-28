<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		breadthfirst.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Nathaniel Parrish, Documentation Team
	Commented:	2011.03.09
-->


	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" class="banner_fill">

<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">

		<h2>Breadth First Search</h2>		

			<!-- Begin Template Table -->
				<table width="984px" id="algo-table" border="1" cellpadding="0">
					<tr height="5%" class="algo-table-top">
					
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
						
							<div style="float: left;" align="left" id="control-button-box">
								<button onclick="playAnimation()">Start</button>
								<button onclick="step()">Forward</button>
								<button onclick="back()">Back</button>
								<button onclick="reset()">Reset</button>
							</div>

							<div style="float: right;" align="right" id="info-button-box">
								<button id="concept" onMouseOut="UnTip();">Concept</button>
								<button id="howto" onMouseOut="UnTip();">How-to</button>
							</div>
							
						</td>
				<!-- End Controls -->
					</tr>

					<tr height="90%" class="algo-table-middle">
				<!-- Begin Psuedo -->
						<td width="25%" valign="top" class="psuedocode" id="psuedocode-column">		

<div class="container"> 
 
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<div class="tab_container"> 
		<div id="tab1" class="tab_content" style="font-size:small;"> 
<pre>
<b>procedure</b> breadthFirstSearch(v)
   Q <- empty-queue
   mark[v] <- visited
   <b>enqueue</b> v into Q
<div id ="searchlevel">   <b>while</b> Q is not empty <b>do</b></div>      
      u <- first(Q)
<div id = "node--">      <b>dequeue</b> u from Q</div>      
      <b>for</b> each node w adjacent to u <b>do</b>
<div id = "node++">          <b>if</b> mark[w] not visited
              <b>then</b> mark[w] <- visited
              <b>enqueue</b> w into Q</div>
<div id = "found">   <b>return</b> breadthFirstSearch(v)</div><div id = "notfound">
      <b>else</b> v not found</div>
</pre>
		</div> 
 
		<div id="tab2" class="tab_content" style="font-size:small;"> 
<pre>
void Tree::breadthFirst()
{
  Queue queue;
  Tree *traverse;

  queue.insert(root);

  while (!queue.isEmpty()) 
  {
    traverse = queue.remove();

    if (traverse->getLeftSubTree() != NULL)
      queue.insert(traverse->LeftTreeNodes());

    if (traverse->getRightSubTree() != NULL)
      queue.insert(traverse->RightSubNodes());
  }
}
</pre>
		</div> 
	</div> 
</div> 	

						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td valign="top">
							<TABLE BORDER="0" cellpadding="0" cellspacing="0" background="images/algorithm/breadthfirst/bfs_background.png">			
								<TR>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
										<div id="level0" class="image" style="visibility: hidden;">
										<img id="level0" src="images/algorithm/breadthfirst/arrow.png">
										<div class="text"></div>
									</div>
									</td>
									<TD HEIGHT="50px" width="50px" >
								   <div class="image">

									  <img id ="0" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										0
									  </div>
									  </div>


									</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								</TR>

								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>

								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								<div id="level1" class="image" style="visibility: hidden;">
										<img id="level1" src="images/algorithm/breadthfirst/arrow.png">
										<div class="text"></div>
									</div>
								</td>
								<TD HEIGHT="50px" width="50px" >
								 
								  <div class="image">

									  <img id ="1" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										1
									  </div>
									  </div>

								</div>
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="2" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										2
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								</TR>

								<TR>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								<div id="level2" class="image" style="visibility: hidden;">
										<img id="level2" src="images/algorithm/breadthfirst/arrow.png">
										<div class="text"></div>
									</div>
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="3" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										3
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="4" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										4
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="5" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										5
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="6" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										6
									  </div>
									  </div>

								</td>
								</TR>

								<TR>
								<TD HEIGHT="50px" width="50px" >
								<div id="level3" class="image" style="visibility: hidden;">
										<img id="level3" src="images/algorithm/breadthfirst/arrow.png">
										<div class="text"></div>
									</div>
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="7" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										7
									  </div>
									  </div>

								</td>

								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="8" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										8
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="9" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										9
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="10" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										10
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="11" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										11
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="12" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										12
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="13" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										13
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div class="image">

									  <img id ="14" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										14
									  </div>
									  </div>

								</td>

							</table>
						</td>
				<!-- End View -->
					</tr>
				
				<!-- Begin Settings -->
					<tr height="20%" id="algo-table-bottom">
						<td colspan="6" align="center"><!-- form to set value of the stack -->
							<input type="text" size="3" maxlength="3" name="input1" />
							<button onclick="setTarget()">target node</button>
						</td>
					</tr>
                    
                    
				

				<!-- End Settings -->
				</table>
			<!-- End Template Table -->	
			<br/> <br/>
			
			</td>
		  </tr>
		</table>





<!-- End of php file -->
		</td>
	  </tr>
	</table>

