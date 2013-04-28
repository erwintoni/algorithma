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
		<td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of php file -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<h2>Kruskal's</h2>		
		<br />

		<!-- Begin Template Table -->
				<table width="984px" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								
								<button id="demo" onclick="this.disabled=true; InitializeTimer(); StartTheTimer()">Demo</button>
								<button id="forward" onclick="Forward()">Forward</button>
								<button id="back" disabled="true" onclick="Back()">Back</button>
								<button id="custom" disabled="true" onclick="">Custom</button>
								<button id="reset"onclick="window.location.reload(); Initialize()">Reset</button>
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
						<td width="10%" class="psuedocode" id="psuedocode">				
							<!-- Enter Pseudo Here -->

<div class="container" > 
 
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 	
	<div class="tab_container" style="width:280px;"> 
		<div id="tab1" class="tab_content" style="font-size:small;"> <div id='psuedoCode1'><strong>function</strong> Kruskal(edges[1...n]) </div>
						<div id='psuedoCode2'>&nbsp&nbsp&nbsp&nbspCluster C <- v {where v is the set of vertices}</div>
						<div id='psuedoCode3'>&nbsp&nbsp&nbsp&nbspsort(edges) {sort by edge weights}</div>
  							<div id='psuedoCode4'>&nbsp&nbsp&nbsp&nbspForest T</div><br>
						<div id='psuedoCode5'><strong>while</strong> T < n edges <strong>do</strong></div>
						<div id='psuedoCode6'>{C(u) is the cluster containing one node of an edge}</div>
						<div id='psuedoCode7'>{C(v) is the cluster containing the other node of an edge}</div>
						<div id='psuedoCode8'>&nbsp&nbsp&nbsp&nbsp <strong>if</strong> C(v) != C(u) <strong>then</strong></div>
						<div id='psuedoCode9'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp addEdge(edge(v,u), T)</div>
						<div id='psuedoCode10'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp merge(C(v),C(u))</div>
						<div id='psuedoCode11'><strong>return</strong> tree T<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
		</div> 
 
		<div id="tab2" class="tab_content" style="font-size:small;"> 
<strong><div id="cppLine1">Graph kruskal(Graph g)</div></strong>
<div id="cppLine2">{</div>
<div id="cppLine3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int n = g.numberOfNodes();</div>
<div id="cppLine4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int e = g.numerOfEdges();</div>
<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graph result = new Graph(n);</div>
<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vector<Edge> edges = graph.getEdges();</div>
<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sortByWeight(edges);</div>
<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i, u,v;</div>
<div id="cppLine7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i < e;i++);</div>
<div id="cppLine8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;u = generateClusterU(edges,i);</div>
<div id="cppLine10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v = generateClusterV(edges,i);</div>
<div id="cppLine11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(u != v)</div>
<div id="cppLine12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result.addEdge(u,v);</div>
<div id="cppLine19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return result;</div>
<div id="cppLine22">}</div>
		</div> 
	</div> 
</div> 	
						
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5">
							<div class="workarea" id="workarea">
								
								<div class="node" id="A">A</div>
								<div class="node" id="B">B</div>
								<div class="node" id="C">C</div>
								<div class="node" id="D">D</div>
								<div class="node" id="E">E</div>
								<div class="node" id="F">F</div>
								
								<div class="edge" id="AB"></div>
								<div class="edge" id="AD"></div>
								<div class="edge" id="BC"></div>
								<div class="edge" id="BE"></div>
								<div class="edge" id="CF"></div>
								<div class="edge" id="DE"></div>
								<div class="edge" id="EF"></div>
							</div>
						</td>
				<!-- End View -->
					</tr>
				
				<!-- Begin Settings -->
					<tr height="5%" id="algo-table-bottom">
						<td colspan="6" align="center" class="main-controls">
							Enter weight for edges (1-99)<br>
							AB<input id="ABin" type="text" size="1" onblur="ChangeNumber('AB')" value="7"/>&nbsp
							AD<input id="ADin" type="text" size="1" onblur="ChangeNumber('AD')" value="5"/>&nbsp
							BC<input id="BCin" type="text" size="1" onblur="ChangeNumber('BC')" value="8"/>&nbsp
							BE<input id="BEin" type="text" size="1" onblur="ChangeNumber('BE')" value="7"/>&nbsp
							CF<input id="CFin" type="text" size="1" onblur="ChangeNumber('CF')" value="5"/>&nbsp
							DE<input id="DEin" type="text" size="1" onblur="ChangeNumber('DE')" value="15"/>&nbsp
							EF<input id="EFin" type="text" size="1" onblur="ChangeNumber('EF')" value="8"/>&nbsp	
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

