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
		<p class="algo_title">Prim's</p>		
		<br />

			<!-- Begin Template Table -->
				<table width="984px" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								
								<button id="play" onclick="Play()">Play</button>
								<button id="forward" onclick="Forward()">Forward</button>
								<button id="back" disabled="true" onclick="Backward()">Back</button>
								
								<button id="reset" onclick="javascript:location.reload(true)">Reset</button>
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

<div class="container"> 
 
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<div class="tab_container" style="width:280px;"> 
		<div id="tab1" class="tab_content" style="font-size:small;"> 	
					<!-- Enter Pseudo Here -->
							<b>function</b> Prims ( G )<br />
							{G is a weighted connected graph with vertices V and edges E}<br />
							<div id = "pseudo1">
							<b>array</b> V<sub>new</sub>[]<br />
							<b>array</b> E<sub>new</sub>[]<br />
							x = random node from V<br />
							V<sub>new</sub>.push( x )<br />
							</div>
							<b>repeat</b><br />
								<ul>
								<ul>
								<div id = "pseudo2"><b>array</b> Connected = edges connected to, but not in V<sub>new</sub><br /></div>
								<div id = "pseudo3">edge = findMinimumWeightOf( Connected )<br />
								{edge is a set of vertices [u,v] such that u is in V<sub>new</sub> and v is not}<br /></div>
								<div id = "pseudo4">E<sub>new</sub>.push( edge )<br />
								V<sub>new</sub>.push( v )<br /></div>
								</ul>
								</ul>
							<b>until</b> V<sub>new</sub> = V<br />
							<div id = "pseudo5"><b>return</b> E<sub>new</sub><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
		</div> 
 
		<div id="tab2" class="tab_content" style="font-size:small;"> 
<pre>
class prims
{
private : int cost[MAX][MAX], tree[MAX][MAX];
	  int n;
public  : void readmatrix();
	  int spanningtree(int);
	  void display(int);
};

void prims :: readmatrix()
{
  int i, j;
  cout << "\nEnter the number of vertices in the Graph : ";
  cin  >> n;
  cout << "\nEnter the Cost matrix of the Graph\n\n";
  for (i = 1; i <= n; i++)
	for (j = 1; j <= n; j++)
		cin >> cost[i][j];
}

int prims :: spanningtree(int src)
{
  int visited[MAX], d[MAX], parent[MAX];
  int i, j, k, min, u, v, stcost;
  for (i = 1; i <= n; i++)
  {
	d[i] = cost[src][i];
	visited[i] = 0;
	parent[i] = src;
  } 
  visited[src] = 1;
  stcost = 0;
  k = 1;
  for (i = 1; i < n; i++)
  {
	min = 999;
	for (j = 1; j <= n; j++)
	{
		if (!visited[j] && d[j] < min)
		{
			min = d[j];
			u = j;
		}
	}
	visited[u] = 1;
	stcost = stcost + d[u];
	tree[k][1] = parent[u];
	tree[k++][2] = u;
	for (v = 1; v <= n; v++)
		if (!visited[v] && (cost[u][v] < d[v]))
		{
			d[v] = cost[u][v];
			parent[v] = u;
		}
  }
  return (stcost);
}
</pre>
		</div> 
	</div> 
</div> 				
						
						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5">
							<div class="workarea" onmousedown="PlaceNode(event)" id="workarea">
			
							</div>
						</td>
				<!-- End View -->
					</tr>
				
				<!-- Begin Settings -->
					<tr height="5%" id="algo-table-bottom">
						<!--<td colspan="6" align="center" class="main-controls">							
							<button id="AddNode" disabled="true" onclick="AddNode()">Add Node</button>
							<button id="AddEdge" disabled="true" onclick="AddEdge()">Add Edge</button>
							<button id="Done" disabled="true" onclick="CustomDone()">Done</button>
							<button id="demo" onclick="PlayDemo()">Demo</button>
						</td>-->
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



