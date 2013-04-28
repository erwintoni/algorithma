<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		nameofalgorithm.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Juan Vidart, Documentation Team
	Commented:	2011.03.09
-->
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" class="banner_fill">

<!-- Start of php file -->
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">

		<h2>Depth First Search</h2>	


		<!-- Begin Template Table -->
				<table width="1056px" id="algo-table" border="1" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								
                                     <button  onClick = "if(once){animate();} once = 0;">Animate </button>
        							 <button  onClick="window.location.reload()">Reset</button>
        							 <button  onClick = "step(); ">Step</button>
         							 <button  onClick = "stepBack();"> Previous </button>
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
						<td width="1%" class="psuedocode" id="psuedocode">				
							
<div class="container"> 
 
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<div class="tab_container"> 
		<div id="tab1" class="tab_content">

						<div class="text" id="l1">function preorderTraversal(T: tree)</div>
                        <div class="text" id="l2">if leftSubtree == null && rightSubtree = null </div>
                        <div class="text" id="l3">&nbsp &nbsp &nbsp return</div>
                        <div class="text" id="l4">if leftSubtree != null</div>
                        <div class="text" id="l5">&nbsp &nbsp &nbsp preorderTraversal(leftSubtree)</div>
						<div class="text" id="l6">if rightSubtree != null</div>
                        <div class="text" id="l7">&nbsp &nbsp &nbsp preorderTraversal(rightSubtree)</div>
                      
		</div> 
 
		<div id="tab2" class="tab_content" style="font-size:small;"> 
<pre>
void Tree::depthFirst()
{
    vector< vertex<int> >
           v = Pgraph();
    list< vertex<int>* > path;
    if (depth_first_search(v[0],
	is_goal, path))
    {
        cout << "Found path: ";
        list< vertex<int>* >::
	iterator iter = 
                 path.begin();
        while (iter != path.end())
        {
            cout << (*iter)
	    ->get_data() << " ";
            iter++;
        }
        cout << endl;
    }
    else
    {
        cout << "No path found"
	<< endl;
    }
    return 0;
</pre>
		</div> 
	</div> 
</div> 	
						
					  </td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5">
							<div class="workarea" id="workarea">
								
								<TABLE BORDER="0" cellpadding="0" cellspacing="0" background="images/algorithm/depthfirst/background.png">	
							<!-- table that sets all black circles and numerical values -->		
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
                                    
                                          <img id ="50" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
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
                                    
                                          <img id ="20" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
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
                                    
                                          <img id ="80" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
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
                                    
                                          <img id ="10" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
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
                                    
                                          <img id ="30" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
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
                                    
                                          <img id ="70" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
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
                                    
                                          <img id ="90" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
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
                                    
                                          <img id ="5" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
                                          <div class="text">
                                            5
                                          </div>
                                          </div>
                                    
                                    </td>
                                    
                                    <TD HEIGHT="50px" width="50px" >
                                    </td>
                                    <TD HEIGHT="50px" width="50px" >
                                      <div id="node15" class="image">
                                    
                                          <img id ="15" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
                                          <div class="text">
                                            15
                                          </div>
                                          </div>
                                    
                                    </td><TD HEIGHT="50px" width="50px" >
                                    </td>
                                    <TD HEIGHT="50px" width="50px" >
                                      <div id="node25" class="image">
                                    
                                          <img id ="25" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
                                          <div class="text">
                                            25
                                          </div>
                                          </div>
                                    
                                    </td><TD HEIGHT="50px" width="50px" >
                                    </td>
                                    <TD HEIGHT="50px" width="50px" >
                                      <div id="node35" class="image">
                                    
                                          <img id ="35" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
                                          <div class="text">
                                            35
                                          </div>
                                          </div>
                                    
                                    </td><TD HEIGHT="50px" width="50px" >
                                    </td>
                                    <TD HEIGHT="50px" width="50px" >
                                      <div id="node65" class="image">
                                    
                                          <img id ="65" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
                                          <div class="text">
                                            65
                                          </div>
                                          </div>
                                    
                                    </td><TD HEIGHT="50px" width="50px" >
                                    </td>
                                    <TD HEIGHT="50px" width="50px" >
                                      <div id="node75" class="image">
                                    
                                          <img id ="75" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
                                          <div class="text">
                                            75
                                          </div>
                                          </div>
                                    
                                    </td><TD HEIGHT="50px" width="50px" >
                                    </td>
                                    <TD HEIGHT="50px" width="50px" >
                                      <div id="node85" class="image">
                                    
                                          <img id ="85" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
                                          <div class="text">
                                            85
                                          </div>
                                          </div>
                                    
                                    </td>
                                    <TD HEIGHT="50px" width="50px" >
                                    </td>
                                    <TD HEIGHT="50px" width="50px" >
                                      <div id="node95" class="image">
                                    
                                          <img id ="95" src="images/algorithm/depthfirst/circle.gif"  height="50px" width="50px" >
                                          
                                          <div class="text">
                                            95
                                          </div>
                                          </div>
                                    
                                    </td>
                                    
                                    </table>	
							</div>
						</td>
				<!-- End View -->
					</tr>
				
				<!-- Begin Settings --> 
					<tr height="20%" id="algo-table-bottom">
						<td colspan="2" width="50%" align="center">
					Search Value:<input id="myText" size = "2" type = "text" value = "">
					<input type = "button" value = "Set Value" onClick = "setTarget();"> 
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

