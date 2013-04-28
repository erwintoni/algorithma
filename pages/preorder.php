<!--
	Name:		Carlos Maldonado, Matthew Tonyan, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		preorder.php
	Created:		2011.01.31

	Modified By:	Carlos Maldonado, Matthew Tonyan, Team (One/Two)
	Modified:		2011.02.14
	
	Commented By:	Christopher Huerta, Documentation Team
	Commented:	2011.03.09
-->

<!-- Begin php file -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg"> 
	  <tr> 
		<td align="center"> 
		<br /> 
	<h2>Pre-Order Traversal</h2>

		<table width="1100px" id="algo-table" border="2" style="height:500px;" cellpadding="5"> 
			 <tr height="5%" class="algo-table-top">
 
	<!-- Begin Contols -->	
	<td colspan="6" class="main-controls"> 
		<div style="float: left;" align="left" id="control-button-box"> 
					<button class="btn" id="s1" onclick="animate(); animPseudo();">Animate</button>
					<button class="btn" id="f1" onclick="pause();">Pause</button>
					<button class="btn" id="b1" onclick="resumeAnim();">Resume</button>

					<button class="btn" onClick="history.go(0); Res();">Reset</button>
		</div> 
 
		<div style="float: right;" align="right" id="info-button-box"> 
					<button class="btn" id="concept" onMouseOut="UnTip();">Concept</button>
					<button class="btn" id="howto" onMouseOut="UnTip();">How-to</button>
		</div> 
	</td> 
 
	<!-- End Controls -->
   		</tr> 
 
					<tr height="90%" class="algo-table-middle"> 

	<td width="25%" valign="top" class="psuedocode" id="psuedocode-column">		

<!-- Begin container --> 
<div class="container" style="font-size:small;"> 
 
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<!-- Begin tab_container -->
	<div class="tab_container">

		<!-- Begin tab1 --> 
		<div id="tab1" class="tab_content">  
                    
		      <div class="text" id="l1"><strong>function preorderTraversal(T: tree)</strong><br /><br />
												&nbsp;if leftSubtree == null && <br />
												&nbsp;&nbsp;rightSubtree == null </div><br />
                      <div class="text" id="l4">&nbsp;&nbsp; then return</div></br />
                      <div class="text" id="l2">&nbsp;if leftSubtree != null<br /><br />
										&nbsp;&nbsp; then preorderTraversal(leftSubtree)</div><br />
        	      <div class="text" id="l3">&nbsp;if rightSubtree != null<br /><br />
										&nbsp;&nbsp; then preorderTraversal(rightSubtree)</div><br />

		</div> 
 		<!-- End tab1 -->

		<!-- Begin tab2 -->
		<div id="tab2" class="tab_content"> 
                    
		<strong><div id="cppLine0">void Postorder(treeNode* currentNode) </div></strong>
		<div id="cppLine1">{</div>
		<div id="cppLine2">&nbsp;&nbsp;&nbsp;if (currentNode != NULL)</div>
		<div id="cppLine3">&nbsp;&nbsp;&nbsp;{</div>
		<div id="cppLine4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << currentNode -> data;</div>
		<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postorder(currentNode -> leftChild);</div>
		<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postorder(currentNode -> rightChild);</div>
		<div id="cppLine7">&nbsp;&nbsp;&nbsp;}</div>
		<div id="cppLine8">}</div>

		</div>
		<!-- End tab2 -->
	</div>
    <!-- End tab_container -->        
            
			<div class="animation">
              	
              <img style ="visibility:hidden" src="images/algorithm/postorder/highlight.png" alt="" id="highlight" width="53" height="53" style="position: relative; left: -255px; bottom: -269px"/>
             
			</div>
</div>
<!-- End container -->  

						</td> 

<!-- End Psuedo --> 
				
				<!-- Begin View --> 
				<td colspan="5" align="center" valign="top">
				</td>
					<!-- Begin Settings -->
							<tr height="20%" >
							<td colspan="6" align="center"><!-- form to set value of the stack -->
								<br />
							</td> 
							</tr> 
					<!-- End Settings -->

				<!-- End View --> 

				
				
</table>	
		<!-- End Template Table --> 
		<br/> <br/> 
		
		</td> 
	  </tr> 
	</table> 
				
<!-- End of php file --> 
