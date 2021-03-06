<h3 id="eQTLs">eQTLs</h3>
FUMA contains several data sources of eQTLs and each data source is described in this section.
<h4><strong>eQTL data sources</strong></h4>
<div style="padding-left: 40px;">
	<h4><strong>1. GTEx v6</strong></h4>
	<p><strong>Data source</strong><br/>
		eQTL data was downloaded from <a href="http://www.gtexportal.org/home/datasets">http://www.gtexportal.org/home/datasets</a>.
		Under the section of GTEx V6, from single tissue eQTL data both <span style="color: blue;">GTEx_analysis_V6_eQTLs.tar.gz</span>
		for significant SNP-gene association based on permutation, and
		<span style="color: blue;">GTEx_Analysis_V6_all-snp-gene-associations.tar</span> for every SNP-gene association test (including non-significant paris)
		were downloaded.<br/>
		GTEx eQTL v6 contains 44 different tissue types across 30 general tissue types.
	</p>
	<p><strong>Description</strong><br/>
		FUMA contains all SNP-gene pairs of cis-eQTL including non-significant association.
		Significant eQTLs are defined as FDR (gene q-value) &le; 0.05.
		The gene FDR is pre-calculated by GTEx and every gene-tissue pair has a defined P-value threshold for eQTLs based on permutation.<br/>
		Signed statistics is t-statistics.
	</p>
	<p><strong>Samples</strong><br/>
		<div class="panel panel-default">
			<div class="panel-heading">
				<a href="#gtexTable" data-toggle="collapse">GTEx eQTL tissue types and sample size</a><br/>
			</div>
			<div id="gtexTable" class="panel-body collapse">
				<span class="info"><i class="fa fa-info"></i>
					The table contains the list of tissue types available in GTEx v6 for cis-eQTL (only tissues with genotyped sample size &ge; 70).
				</span>
				<table class="table table-bordered">
					<thead>
						<th>General tissue type</th>
						<th>Tissue type</th>
						<th>Genotyped sample size</th>
					</thead>
					<tbody>
						<tr><td>Adipose Tissue</td><td>Adipose Subcutaneous</td><td>298</td></tr>
						<tr><td>Adipose Tissue</td><td>Adipose Visceral Omentum</td><td>185</td></tr>
						<tr><td>Adrenal Gland</td><td>Adrenal Gland</td><td>126</td></tr>
						<tr><td>Blood</td><td>Cells EBV-transformed lymphocytes</td><td>114</td></tr>
						<tr><td>Blood Vessel</td><td>Artery Aorta</td><td>197</td></tr>
						<tr><td>Blood Vessel</td><td>Artery Coronary</td><td>118</td></tr>
						<tr><td>Blood Vessel</td><td>Artery Tibial</td><td>285</td></tr>
						<tr><td>Blood</td><td>Whole Blood</td><td>338</td></tr>
						<tr><td>Brain</td><td>Brain Anterior cingulate cortex BA24</td><td>72</td></tr>
						<tr><td>Brain</td><td>Brain Caudate basal ganglia</td><td>100</td></tr>
						<tr><td>Brain</td><td>Brain Cerebellar Hemisphere</td><td>89</td></tr>
						<tr><td>Brain</td><td>Brain Cerebellum</td><td>103</td></tr>
						<tr><td>Brain</td><td>Brain Cortex</td><td>96</td></tr>
						<tr><td>Brain</td><td>Brain Frontal Cortex BA9</td><td>92</td></tr>
						<tr><td>Brain</td><td>Brain Hippocampus</td><td>81</td></tr>
						<tr><td>Brain</td><td>Brain Hypothalamus</td><td>81</td></tr>
						<tr><td>Brain</td><td>Brain Nucleus accumbens basal ganglia</td><td>93</td></tr>
						<tr><td>Brain</td><td>Brain Putamen basal ganglia</td><td>82</td></tr>
						<tr><td>Breast</td><td>Breast Mammary Tissue</td><td>183</td></tr>
						<tr><td>Colon</td><td>Colon Sigmoid</td><td>124</td></tr>
						<tr><td>Colon</td><td>Colon Transverse</td><td>169</td></tr>
						<tr><td>Esophagus</td><td>Esophagus Gastroesophageal Junction</td><td>127</td></tr>
						<tr><td>Esophagus</td><td>Esophagus Mucosa</td><td>241</td></tr>
						<tr><td>Esophagus</td><td>Esophagus Muscularis</td><td>218</td></tr>
						<tr><td>Heart</td><td>Heart Atrial Appendage</td><td>159</td></tr>
						<tr><td>Heart</td><td>Heart Left Ventricle</td><td>190</td></tr>
						<tr><td>Liver</td><td>Liver</td><td>97</td></tr>
						<tr><td>Lung</td><td>Lung</td><td>278</td></tr>
						<tr><td>Muscle</td><td>Muscle Skeletal</td><td>361</td></tr>
						<tr><td>Nerve</td><td>Nerve Tibial</td><td>256</td></tr>
						<tr><td>Ovary</td><td>Ovary</td><td>85</td></tr>
						<tr><td>Pancreas</td><td>Pancreas</td><td>149</td></tr>
						<tr><td>Pituitary</td><td>Pituitary</td><td>87</td></tr>
						<tr><td>Prostate</td><td>Prostate</td><td>87</td></tr>
						<tr><td>Skin</td><td>Cells Transformed fibroblasts</td><td>272</td></tr>
						<tr><td>Skin</td><td>Skin Not Sun Exposed Suprapubic</td><td>196</td></tr>
						<tr><td>Skin</td><td>Skin Sun Exposed Lower leg</td><td>302</td></tr>
						<tr><td>Small Intestine</td><td>Small Intestine Terminal Ileum</td><td>77</td></tr>
						<tr><td>Spleen</td><td>Spleen</td><td>89</td></tr>
						<tr><td>Stomach</td><td>Stomach</td><td>170</td></tr>
						<tr><td>Testis</td><td>Testis</td><td>157</td></tr>
						<tr><td>Thyroid</td><td>Thyroid</td><td>278</td></tr>
						<tr><td>Uterus</td><td>Uterus</td><td>70</td></tr>
						<tr><td>Vagina</td><td>Vagina</td><td>79</td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</p><br/>

	<h4><strong>2. Blood eQTL browser (Westra et al. 2013)</strong></h4>
	<p><strong>Data source</strong><br/>
		eQTL data was downloaded from <a href="http://genenetwork.nl/bloodeqtlbrowser/">http://genenetwork.nl/bloodeqtlbrowser/</a>.
	</p>
	<p><strong>Description</strong><br/>
		The data only include eQTLs with FDR &le; 0.5.
		Genes in the original files were mapped to Ensembl ID in which genes are removed if they are not mapped to Ensembl ID.<br/>
		Signed statistics is Z-score.
	</p>
	<p><strong>Samples</strong><br/>
		5,311 peripheral blood samples from 7 studies (<a href="https://www.ncbi.nlm.nih.gov/pubmed/3991562">Westra et al. 2013</a>).
	</p><br/>

	<h4><strong>3. BIOS QTL browser (Zhernakova et al. 2017)</strong></h4>
	<p><strong>Data source</strong><br/>
		eQTL data was downloaded from <a href="http://genenetwork.nl/biosqtlbrowser/">http://genenetwork.nl/biosqtlbrowser/</a>.
		<span style="color:blue;">Cis-eQTLs Gene-level all primary effects</span> was downloaded which includes all SNP-gene pairs with FDR &le; 0.05.
	</p>
	<p><strong>Description</strong><br/>
		The data only include eQTLs with FDR &le; 0.05.<br/>
		Signed statistics is beta.
	</p>
	<p><strong>Samples</strong><br/>
		2,116 whole peripheral blood samples of healthy adults from 4 Dutch cohorts (<a href="https://www.ncbi.nlm.nih.gov/pubmed/27918533">Zhernakova et al. 2017</a>).
	</p><br/>

	<h4><strong>4. BRAINEAC</strong></h4>
	<p><strong>Data source</strong><br/>
		eQTL was obtained from <a target="_blank" href="http://www.braineac.org/">http://www.braineac.org/</a>.<br/>
	</p>
	<p><strong>Description</strong><br/>
		The data include all eQTLs with nominal P-value < 0.05.
		Since tested allele was not provided in the original data source, minor alleles in 1000 genome phase 3 are assigned as tested alleles.<br/>
		Signed statistics is t-statistics.<br/>
		eQTLs were identified for each of the following 10 brain regions and based on averaged expression across all of them.<br/>
		<span class="info"><i class="fa fa-info"></i>
			Alignment of risk increasing allele and eQTL tested allele was not performed for this data source,
			since tested allele is not available in the original data source
			(replaced with "NA" in the result table).
		</span>
		<ul>
			<li>Cerebellar cortex</li>
			<li>Frontal cortex</li>
			<li>Hippocampus</li>
			<li>Inferior olivary nucleus (sub-dissected from the medulla)</li>
			<li>Occipital cortex</li>
			<li>Putamen (at the level of the anterior commissure)</li>
			<li>Substantia nigra</li>
			<li>Temporal cortex</li>
			<li>Thalamus (at the level of the lateral geniculate nucleus)</li>
			<li>Intralobular white matter</li>
		</ul>
	</p>
	<p><strong>Samples</strong><br/>
		134 neuropathologically confirmed control individuals of European descent from <a target="_blank" href="https://ukbec.wordpress.com/">UK Brain Expression Consortium</a>
		(<a target="_blank" href="https://www.ncbi.nlm.nih.gov/pubmed/25174004">Ramasamy et al. 2014</a>).
	</p><br/>

	<h4><strong>5. GTEx v7</strong></h4>
	<p><strong>Data source</strong><br/>
		eQTL data was downloaded from <a href="http://www.gtexportal.org/home/datasets">http://www.gtexportal.org/home/datasets</a>.
		Under the section of GTEx V7, from single tissue eQTL data both <span style="color: blue;">GTEx_analysis_v7_eQTLs.tar.gz</span>
		for significant SNP-gene association based on permutation, and
		<span style="color: blue;">GTEx_Analysis_v7_all_associations.tar.gz</span> for every SNP-gene association test (including non-significant pairs)
		were downloaded.<br/>
		GTEx eQTL v6 contains 48 different tissue types across 30 general tissue types.
	</p>
	<p><strong>Description</strong><br/>
		FUMA contains all SNP-gene pairs of cis-eQTL including non-significant association.
		Significant eQTLs are defined as FDR (gene q-value) &le; 0.05.
		The gene FDR is pre-calculated by GTEx and every gene-tissue pair has a defined P-value threshold for eQTLs based on permutation.<br/>
		Signed statistics is slope.
	</p>
	<p><strong>Samples</strong><br/>
		<div class="panel panel-default">
			<div class="panel-heading">
				<a href="#gtexTable_v7" data-toggle="collapse">GTEx eQTL tissue types and sample size</a><br/>
			</div>
			<div id="gtexTable_v7" class="panel-body collapse">
				<span class="info"><i class="fa fa-info"></i>
					The table contains the list of tissue types available in GTEx v7 for cis-eQTL (only tissues with genotyped sample size &ge; 70).
				</span>
				<table class="table table-bordered">
					<thead>
						<th>General tissue type</th>
						<th>Tissue type</th>
						<th>Genotyped sample size</th>
					</thead>
					<tbody>
						<tr><td>Adipose Tissue</td><td>Adipose Subcutaneous</td><td>385</td></tr>
						<tr><td>Adipose Tissue</td><td>Adipose Visceral Omentum</td><td>313</td></tr>
						<tr><td>Adrenal Gland</td><td>Adrenal Gland</td><td>175</td></tr>
						<tr><td>Blood</td><td>Cells EBV-transformed lymphocytes</td><td>117</td></tr>
						<tr><td>Blood</td><td>Whole Blood</td><td>369</td></tr>
						<tr><td>Blood Vessel</td><td>Artery Aorta</td><td>267</td></tr>
						<tr><td>Blood Vessel</td><td>Artery Coronary</td><td>152</td></tr>
						<tr><td>Blood Vessel</td><td>Artery Tibial</td><td>388</td></tr>
						<tr><td>Brain</td><td>Brain Amygdala</td><td>88</td></tr>
						<tr><td>Brain</td><td>Brain Anterior cingulate cortex BA24</td><td>109</td></tr>
						<tr><td>Brain</td><td>Brain Caudate basal ganglia</td><td>144</td></tr>
						<tr><td>Brain</td><td>Brain Cerebellar Hemisphere</td><td>125</td></tr>
						<tr><td>Brain</td><td>Brain Cerebellum</td><td>154</td></tr>
						<tr><td>Brain</td><td>Brain Cortex</td><td>136</td></tr>
						<tr><td>Brain</td><td>Brain Frontal Cortex BA9</td><td>118</td></tr>
						<tr><td>Brain</td><td>Brain Hippocampus</td><td>111</td></tr>
						<tr><td>Brain</td><td>Brain Hypothalamus</td><td>108</td></tr>
						<tr><td>Brain</td><td>Brain Nucleus accumbens basal ganglia</td><td>130</td></tr>
						<tr><td>Brain</td><td>Brain Putamen basal ganglia</td><td>111</td></tr>
						<tr><td>Brain</td><td>Brain Spinal cord cervical c-1</td><td>83</td></tr>
						<tr><td>Brain</td><td>Brain Substantia nigra</td><td>80</td></tr>
						<tr><td>Breast</td><td>Breast Mammary Tissue</td><td>251</td></tr>
						<tr><td>Colon</td><td>Colon Sigmoid</td><td>203</td></tr>
						<tr><td>Colon</td><td>Colon Transverse</td><td>246</td></tr>
						<tr><td>Esophagus</td><td>Esophagus Gastroesophageal Junction</td><td>213</td></tr>
						<tr><td>Esophagus</td><td>Esophagus Mucosa</td><td>358</td></tr>
						<tr><td>Esophagus</td><td>Esophagus Muscularis</td><td>335</td></tr>
						<tr><td>Heart</td><td>Heart Atrial Appendage</td><td>264</td></tr>
						<tr><td>Heart</td><td>Heart Left Ventricle</td><td>272</td></tr>
						<tr><td>Liver</td><td>Liver</td><td>153</td></tr>
						<tr><td>Lung</td><td>Lung</td><td>383</td></tr>
						<tr><td>Muscle</td><td>Muscle Skeletal</td><td>491</td></tr>
						<tr><td>Nerve</td><td>Nerve Tibial</td><td>361</td></tr>
						<tr><td>Ovary</td><td>Ovary</td><td>122</td></tr>
						<tr><td>Pancreas</td><td>Pancreas</td><td>220</td></tr>
						<tr><td>Pituitary</td><td>Pituitary</td><td>157</td></tr>
						<tr><td>Prostate</td><td>Prostate</td><td>132</td></tr>
						<tr><td>Salivary Gland</td><td>Minor Salivary Gland</td><td>85</td></tr>
						<tr><td>Skin</td><td>Cells Transformed fibroblasts</td><td>300</td></tr>
						<tr><td>Skin</td><td>Skin Not Sun Exposed Suprapubic</td><td>335</td></tr>
						<tr><td>Skin</td><td>Skin Sun Exposed Lower leg</td><td>414</td></tr>
						<tr><td>Small Intestine</td><td>Small Intestine Terminal Ileum</td><td>122</td></tr>
						<tr><td>Spleen</td><td>Spleen</td><td>146</td></tr>
						<tr><td>Stomach</td><td>Stomach</td><td>237</td></tr>
						<tr><td>Testis</td><td>Testis</td><td>225</td></tr>
						<tr><td>Thyroid</td><td>Thyroid</td><td>399</td></tr>
						<tr><td>Uterus</td><td>Uterus</td><td>101</td></tr>
						<tr><td>Vagina</td><td>Vagina</td><td>106</td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</p><br/>

	<h4><strong>6. MuTHER (Grundberg et al. 2012)</strong></h4>
	<p><strong>Data source</strong><br/>
		eQTL data was downloaded from <a href="http://www.muther.ac.uk/">http://www.muther.ac.uk/</a>.
	</p>
	<p><strong>Description</strong><br/>
		Chromosome coordinate was lifted over to hg19 from hg18 using liftOver software.
		Gene names are mapped to Ensembl ID (excluded genes which are not mapped to ENSG ID).
		Since only tested allele was provided, other allele was extracted from 1000G EUR population.
		FDR (or any corrected P-value) was not availabe in the original data (in the FUMA, FDR column was replaced with -9).
		<br/>
		Signed statistics is beta.
		<br/>
		<span class="info"><i class="fa fa-info"></i>
			Since FDR is not available, MuTHER eQTLs can be only used when P-value threshold provided by user,
			not "only significant snp-gene pairs" option.
		</span>
	</p>
	<p><strong>Samples</strong><br/>
		856 female individuals of European descent recruited from
		the TwinsUK Adult twin registry (<a href="https://www.ncbi.nlm.nih.gov/pubmed/22941192">Grundberg et al. 2012</a>).
		<ul>
			<li>Adipose (N=855)</li>
			<li>Skin (N=847)</li>
			<li>LCL (N=837)</li>
		</ul>
	</p><br/>

	<h4><strong>7. xQTLServer (Ng et al. 2017)</strong></h4>
	<p><strong>Data source</strong><br/>
		eQTL data was downloaded from <a href="http://mostafavilab.stat.ubc.ca/xqtl/">http://mostafavilab.stat.ubc.ca/xqtl/</a>.
	</p>
	<p><strong>Description</strong><br/>
		Gene names are mapped to Ensembl ID (excluded genes which are not mapped to ENSG ID).
		Since alleles were not available in the original data, extracted from 1000G EUR population based on chromosome coordinate.
		FDR was not provided in the original data source, but the FDR column was replaced with Bonferoni corrected p-value,
		as it was used in the original study (corrected for all tested SNP-gene pairs 60,456,556).
		<br/>
		Signed statistics is not available.
		<br/>
		<span class="info"><i class="fa fa-info"></i>
			Alignment of risk increasing allele and eQTL tested allele was not performed for this data source,
			since tested allele and signed statistics are not available in the original data source
			(replaced with "NA" in the result table).
		</span>
	</p>
	<p><strong>Samples</strong><br/>
		494 dorsolateral prefrontal cortex samples (<a href="https://www.ncbi.nlm.nih.gov/pubmed/28869584">Ng et al. 2017</a>).
	</p><br/>

	<h4><strong>8. CommonMind Consortium (Fromer et al. 2016)</strong></h4>
	<p><strong>Data source</strong><br/>
		eQTL data was downloaded from <a href="https://www.synapse.org//#!Synapse:syn5585484">https://www.synapse.org//#!Synapse:syn5585484</a>.
		Both eQTLs with and without SVA are included.
	</p>
	<p><strong>Description</strong><br/>
		Publicly available eQTLs from CMC (without application) is binned by FDR.
		Therefore, nominal P-value is not available (replaced with -9).
		FDR was binned into the following four groups, &lt;0.2, &lt;0.1, &lt;0.05 and &lt;0.01.
		As numeric value is required for filtering during SNP2GENE process, those categorical values are replaced with
		0.199, 0.099, 0.049 and 0.009 respectively.
		<br/>
		Signed statistics is not available but since expressed increasing allele was provided, signed_stats column is replaced with 1.
		<br/>
		Trans eQTLs are also available for CMC data set (as a separated option from cis-eQTLs).
	</p>
	<p><strong>Samples</strong><br/>
		Post-mortem brain samples from 467 Caucasian individuals (209 with SCZ, 206 controls and 52 AFF cases; <a href="https://www.ncbi.nlm.nih.gov/pubmed/27668389">Fromer et al. 2016</a>).
	</p><br/>
</div>
<br/>
<h4><strong>Alignment of risk increasing allele in GWAS and tested allele of eQTLs</strong></h4>
<div style="padding-left: 40px;">
	<h4><strong>Risk increasing allele in GWAS</strong></h4>
	<p>
		When "beta" or "OR" column is provided in the input GWAS file, risk increasing alleles are defined as follows:
		if beta > 0 or OR > 1, effect/risk allele is defined as the risk increasing allele,
		if beta < 0 or OR < 1, non-effect/non-risk allele is defined as the risk increasing allele.<br/>
		If signed effect is not provided in the input GWAS file, risk increasing allele is not defined ("NA").
		SNPs which are not in the input GWAS file but obtained from reference panel due to high LD are also encoded as "NA".
		<span class="info"><i class="fa fa-info"></i>
			When both effect and non-effect alleles are not provided in the input GWAS file, this alignment is not relevant.
			Please be careful to interpret the results.
		</span>
	</p>
	<h4><strong>Aligned direction of eQTLs</strong></h4>
	<p>
		The sign of the t-statistics or z-score of the original eQTL data sources represents the direction of effect of tested allele.
		To obtain the direction of effect for risk increasing allele of GWAS, risk increasing allele and tested allele of eQTLs are aligned as follows:
		if risk increasing allele is the same allele as tested allele of the eQTL, direction is the same as the sign of the original t-statistics/z-score,
		if risk increasing allele is not same allele as tested allele of the eQTL, direction of t-statistics/z-score was flipped.<br/>
		Direction is either "+" (risk increasing allele increases the expression of the gene) or "-" (risk increasing allele decreases the expression of the gene).
	</p>
	<h4><strong>Examples</strong></h4>
	<p>Here are some examples how the alleles are aligned.</p>
	<table class="table table-bordered" style="text-align: center;">
		<thead>
			<th>uniqID</th>
			<th>effect allale</th>
			<th>non-effect allele</th>
			<th>beta</th>
			<th>risk increasing allele</th>
			<th>tested allele of eQTL</th>
			<th>t-statistics of eQTL</th>
			<th>aligned direction</th>
		</thead>
		<tbody>
			<tr>
				<td>1:201885026:C:T</td>
				<td>T</td>
				<td>C</td>
				<td>0.22</td>
				<td>T</td>
				<td>T</td>
				<td>-7.98</td>
				<td>-</td>
			</tr>
			<tr>
				<td>11:43843579:C:G</td>
				<td>C</td>
				<td>G</td>
				<td>0.004</td>
				<td>C</td>
				<td>G</td>
				<td>17.23</td>
				<td>-</td>
			</tr>
			<tr>
				<td>16:28537971:C:T</td>
				<td>T</td>
				<td>C</td>
				<td>-0.028</td>
				<td>C</td>
				<td>C</td>
				<td>5.04</td>
				<td>+</td>
			</tr>
		</tbody>
	</table>
</div>
