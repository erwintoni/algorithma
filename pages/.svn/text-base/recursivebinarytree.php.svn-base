

<!--
	Name:		Kenneth Williams, Anthony Phillips, Team Two
	Project:		{AlgorithmA}; 2011
	File:		recursivebinarytree.php
	Created:		2011.01.31

	Modified By:	Kenneth Williams, Anthony Phillips, Team Two
	Modified:		2011.02.11

	Commented By:	Juan Vidart, Documentation Team
	Commmented:	2011.02.23
-->
	
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	     <td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<h2>Binary Search Tree</h2>		
		<br />
				
		<!-- Begin Template Table -->
				<table width="984px" id="algo-table" border="1" cellpadding="5">
					 <tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								<button onClick = "highlight(0, 14);">Animate</button>
								<button onClick = "resetNodes();">Reset</button>
								<button onClick = "highlight2();">Step</button>
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

procedure rBinarySearch(T[1..n], first, last, key)

    if first <= last then

	 mid <- (first + last) / 2;
<div id="found">
	 check = T[mid]

	     return mid;
</div><div id="lessthanroot">
	 else if check < T[mid] then

	     return rBinarySearch(T[1..n], first, mid - 1, key);
</div><div id="greaterthanroot">
	 else

	     return rBinarySearch(T[1..n], mid + 1, last, key);
</div>
</pre>
		</div> 
 
		<div id="tab2" class="tab_content" style="font-size:small;"> 
<pre>

void Recursive(int Array[], int first, int last, int key)
{
	if (first <= last)
		mid = (first + last) / 2;
	else
		return -1;
	
	if (check < Array[mid])
		return recursive(Array[], first, mid - 1, key);

	else if (check > Array[mid])
		return recursive(Array[], mid + 1, last, key);

	else
		return key;
}

</pre>
		</div> 
	</div> 
</div> 	
						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5" align="center" valign="top">
							<TABLE BORDER="0" cellpadding="0" cellspacing="0" background="images/algorithm/recursivebinarytree/background.png">			
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
									</td>
									<TD HEIGHT="50px" width="50px" >
								   <div id="0" class="image">

									  <img id ="50" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										50
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
								</td>
								<TD HEIGHT="50px" width="50px" >
								 
								  <div id="1" class="image">

									  <img id ="20" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										20
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
								  <div id="2" class="image">

									  <img id ="80" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										80
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
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node10" class="image">

									  <img id ="10" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										10
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
								  <div id="node30" class="image">

									  <img id ="30" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										30
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
								  <div id="node70" class="image">

									  <img id ="70" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										70
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
								  <div id="node90" class="image">

									  <img id ="90" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										90
									  </div>
									  </div>

								</td>
								</TR>

								<TR>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node5" class="image">

									  <img id ="5" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										5
									  </div>
									  </div>

								</td>

								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node15" class="image">

									  <img id ="15" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										15
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node25" class="image">

									  <img id ="25" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										25
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node35" class="image">

									  <img id ="35" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										35
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>

								<TD HEIGHT="50px" width="50px" >
								  <div id="node65" class="image">

									  <img id ="65" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										65
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node75" class="image">

									  <img id ="75" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										75
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node85" class="image">

									  <img id ="85" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										85
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node95" class="image">

									  <img id ="95" src="images/algorithm/recursivebinarytree/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										95
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
							Search Value:<input id="myText" size = "2" type = "text" value = "">
							<button onClick = "selectText();">Set Value</button>
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
