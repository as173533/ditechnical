@extends('layouts.main') 
@section('css')
<style>
.cardss {
    margin: 2rem 0rem 2rem;
}
table.table.table-bordered {
    box-shadow: none;
}
    .table thead th {
    vertical-align: bottom;
    border-top: none;
    border-right: none;
    border-left: none;
    border-bottom: 2px solid #dee2e6;
    color: #6f6f71;
    font-weight: 500;
}

.table-bordered th, .table-bordered td {
    border-bottom: 1px solid #dee2e6;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #6f6f71;
}    
.coupon label {
    display: none;
}

.coupon .input-text {
    max-width: 300px;
    margin-right: 10px;
}

input[type=text], input[type=email], input[type=url], input[type=password], input[type=number], input[type=date], input[type=tel], select, textarea {
    width: 100%;
    height: 40px;
    border: 1px solid rgba(129,129,129,.25);
    font-size: 14px;
    line-height: 18px;
    padding: 0 10px;
    transition: border-color .5s;
    box-shadow: none;
    border-radius: 0;
}
    
button.button {
    border-color: #000000;
    background-color: #000000;
    padding-left: 30px;
    padding-right: 30px;
    color: #fff;
    height: 40px;  
}
    
.delivery-box {
    background-color: #f7f7f7;
    padding: 5px 10px;
    border-radius: 2px;
    border: 2px dashed #e9e9e9;
    margin: 10px 0px;
    display: block;
    clear: both;
}

.wc-delivery-button {
    background: #ECECEC;
    color: black;
    padding: 8.9px;
    line-height: 42px;
}
    
.billing {
    background: #f6f6f6;
    padding-bottom: 16px;
    margin-bottom: 35px; 
}

.Yorder {
    margin-top: 15px;
    height: auto;
    padding: 20px;
    border: 1px solid #dadada;
}
.Yorder {
    flex: 2;
}

.bill-address-you {
    font-weight: 700;
    color: black;
    font-size: 22px;
    margin-left: 12px;
    text-align: center;
}

table {
    margin: 0;
    padding: 0;
}

th{
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr>td:nth-child(1){
  text-align: left;
  color: #2d2d2a;
  font-size: 13px;
}

td {
    border-bottom: 1px solid #dadada;
    padding: 12px 145px 12px 15px;
    font-size: 13px;
}

p{
  display: block;
  color: #888;
  margin: 0;
  padding-left: 25px;
}
.Yorder>div{
  padding: 15px 0; 
}
.btn-secondary {
    color: #fff;
    background-color: #ff5421 !important;
    border-color: #ff5421 !important;
    border-radius: 50px !important;
    padding: -1px 103px !important;
} 

@media only screen and (max-width: 767px) {
  button.button {
    padding-left: 0px !important;
    padding-right: 0px !important;
    font-size: 12px;
}
 .product-name {
    font-size: 13px !important;
}
.product-image{
  max-width: 80px;
}
.log-in {
    text-align: center !important;
}    
.signup{
    text-align: center !important;
    margin-top: 22px;
}
.coupon .input-text {
    max-width: 190px !important;
}
.billing {
    margin-top: 20px;
}
td {
    padding: 12px 72px 12px 15px;
    font-size: 13px;
}  
  }

.btn-info {
    color: #fff;
    background-color: red;
    border-color: red;
    padding: 5px 8px !important;
}

.btn-info:hover{
    color: #fff;
    background-color: red;
    border-color: red;
    padding: 5px 8px !important;
}
.btn-primary {
    color: #000;
    background-color: transparent;
    border-color: #DFDFDF;
    padding: 8px 7px !important;
    padding-top: -16px;
    border-radius: none !important;
}

.btn-primary:hover{
    color: #000;
    background-color: transparent;
    border-color: #DFDFDF;
    padding: 8px 7px !important;
    padding-top: -16px;
    border-radius: none !important;
}

.product-name {
    font-size: 16px;
    color: #000 !important;
}

.log-in {
    text-align: right;
}    
.signup{
    text-align: left;
}    
    
.log-in a {
    background-color: #457d00;
    color: #ffffff;
    font-size: 15px;
    line-height: 30px;
    padding: 12px 120px;
    margin-bottom: 10px;
}

.log-in a:hover{
    background-color: #2e5105;
}    

.signup a{
    background-color: #757575;
    color: #ffffff;
    font-size: 15px;
    line-height: 30px;
    padding: 12px 120px;
    margin-bottom: 10px;
}

.signup a:hover{
    background-color: #1f1f1f;
}
    
.buttons {
    margin-top: 28px;
}
</style>
@endsection
@section('content')
<!--------------------breadcrumb ---------------------->
<section class="breadcrumb about-us-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title-div">
                    <div class="bread-left-side">
                        <h2>Cart</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="{{route('/')}}">HOME</a>/</li>
                            <li><span>Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------- //breadcrumb ------------------->
<section class="cardss">
<div class="container-fluid">
<div style="overflow-x:auto;">  
<table class="table">
    <thead>
      <tr>
        <th>&nbsp;</th>
        <th>Course</th>
        <th>Price </th>
        <th class="qntys">Quantity</th>
        <th>Attribute</th>
        <th>Services</th>
        <th>Total</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="/public/frontend/images/cart-1.jpg" alt="image" class="product-image" width="60px"></td>
        <td class="product-name">Web Design & Development</td>
        <td>$50</td>
        <td>
          <div class="quantity">
                                        <select classname="select-board-size" id="select-qty" onchange="changeQuantity(this,25,49);">&gt;
                                                                                            <option value="1" selected="">1</option>
                                                                                            <option value="2">2</option>
                                                                                            <option value="3">3</option>
                                                                                            <option value="4">4</option>
                                                                                            <option value="5">5</option>
                                                                                            <option value="6">6</option>
                                                                                            <option value="7">7</option>
                                                                                            <option value="8">8</option>
                                                                                            <option value="9">9</option>
                                                                                            <option value="10">10</option>
                                                                                            <option value="11">11</option>
                                                                                            <option value="12">12</option>
                                                                                            <option value="13">13</option>
                                                                                            <option value="14">14</option>
                                                                                            <option value="15">15</option>
                                                                                            <option value="16">16</option>
                                                                                            <option value="17">17</option>
                                                                                            <option value="18">18</option>
                                                                                            <option value="19">19</option>
                                                                                            <option value="20">20</option>
                                                                                            <option value="21">21</option>
                                                                                            <option value="22">22</option>
                                                                                            <option value="23">23</option>
                                                                                            <option value="24">24</option>
                                                                                            <option value="25">25</option>
                                                                                            <option value="26">26</option>
                                                                                            <option value="27">27</option>
                                                                                            <option value="28">28</option>
                                                                                            <option value="29">29</option>
                                                                                            <option value="30">30</option>
                                                                                            <option value="31">31</option>
                                                                                            <option value="32">32</option>
                                                                                            <option value="33">33</option>
                                                                                            <option value="34">34</option>
                                                                                            <option value="35">35</option>
                                                                                            <option value="36">36</option>
                                                                                            <option value="37">37</option>
                                                                                            <option value="38">38</option>
                                                                                            <option value="39">39</option>
                                                                                            <option value="40">40</option>
                                                                                            <option value="41">41</option>
                                                                                            <option value="42">42</option>
                                                                                            <option value="43">43</option>
                                                                                            <option value="44">44</option>
                                                                                            <option value="45">45</option>
                                                                                            <option value="46">46</option>
                                                                                            <option value="47">47</option>
                                                                                            <option value="48">48</option>
                                                                                            <option value="49">49</option>
                                                                                            <option value="50">50</option>
                                                                                            <option value="51">51</option>
                                                                                            <option value="52">52</option>
                                                                                            <option value="53">53</option>
                                                                                            <option value="54">54</option>
                                                                                            <option value="55">55</option>
                                                                                            <option value="56">56</option>
                                                                                            <option value="57">57</option>
                                                                                            <option value="58">58</option>
                                                                                            <option value="59">59</option>
                                                                                            <option value="60">60</option>
                                                                                            <option value="61">61</option>
                                                                                            <option value="62">62</option>
                                                                                            <option value="63">63</option>
                                                                                            <option value="64">64</option>
                                                                                            <option value="65">65</option>
                                                                                            <option value="66">66</option>
                                                                                            <option value="67">67</option>
                                                                                            <option value="68">68</option>
                                                                                            <option value="69">69</option>
                                                                                            <option value="70">70</option>
                                                                                            <option value="71">71</option>
                                                                                            <option value="72">72</option>
                                                                                            <option value="73">73</option>
                                                                                            <option value="74">74</option>
                                                                                            <option value="75">75</option>
                                                                                            <option value="76">76</option>
                                                                                            <option value="77">77</option>
                                                                                            <option value="78">78</option>
                                                                                            <option value="79">79</option>
                                                                                            <option value="80">80</option>
                                                                                            <option value="81">81</option>
                                                                                            <option value="82">82</option>
                                                                                            <option value="83">83</option>
                                                                                            <option value="84">84</option>
                                                                                            <option value="85">85</option>
                                                                                            <option value="86">86</option>
                                                                                            <option value="87">87</option>
                                                                                            <option value="88">88</option>
                                                                                            <option value="89">89</option>
                                                                                            <option value="90">90</option>
                                                                                            <option value="91">91</option>
                                                                                            <option value="92">92</option>
                                                                                            <option value="93">93</option>
                                                                                            <option value="94">94</option>
                                                                                            <option value="95">95</option>
                                                                                            <option value="96">96</option>
                                                                                            <option value="97">97</option>
                                                                                            <option value="98">98</option>
                                                                                            <option value="99">99</option>
                                                                                            <option value="100">100</option>
                                                                                            <option value="101">101</option>
                                                                                            <option value="102">102</option>
                                                                                            <option value="103">103</option>
                                                                                            <option value="104">104</option>
                                                                                            <option value="105">105</option>
                                                                                            <option value="106">106</option>
                                                                                            <option value="107">107</option>
                                                                                            <option value="108">108</option>
                                                                                            <option value="109">109</option>
                                                                                            <option value="110">110</option>
                                                                                            <option value="111">111</option>
                                                                                            <option value="112">112</option>
                                                                                            <option value="113">113</option>
                                                                                            <option value="114">114</option>
                                                                                            <option value="115">115</option>
                                                                                            <option value="116">116</option>
                                                                                            <option value="117">117</option>
                                                                                            <option value="118">118</option>
                                                                                            <option value="119">119</option>
                                                                                            <option value="120">120</option>
                                                                                            <option value="121">121</option>
                                                                                            <option value="122">122</option>
                                                                                            <option value="123">123</option>
                                                                                            <option value="124">124</option>
                                                                                            <option value="125">125</option>
                                                                                            <option value="126">126</option>
                                                                                            <option value="127">127</option>
                                                                                            <option value="128">128</option>
                                                                                            <option value="129">129</option>
                                                                                            <option value="130">130</option>
                                                                                            <option value="131">131</option>
                                                                                            <option value="132">132</option>
                                                                                            <option value="133">133</option>
                                                                                            <option value="134">134</option>
                                                                                            <option value="135">135</option>
                                                                                            <option value="136">136</option>
                                                                                            <option value="137">137</option>
                                                                                            <option value="138">138</option>
                                                                                            <option value="139">139</option>
                                                                                            <option value="140">140</option>
                                                                                            <option value="141">141</option>
                                                                                            <option value="142">142</option>
                                                                                            <option value="143">143</option>
                                                                                            <option value="144">144</option>
                                                                                            <option value="145">145</option>
                                                                                            <option value="146">146</option>
                                                                                            <option value="147">147</option>
                                                                                            <option value="148">148</option>
                                                                                            <option value="149">149</option>
                                                                                            <option value="150">150</option>
                                                                                            <option value="151">151</option>
                                                                                            <option value="152">152</option>
                                                                                            <option value="153">153</option>
                                                                                            <option value="154">154</option>
                                                                                            <option value="155">155</option>
                                                                                            <option value="156">156</option>
                                                                                            <option value="157">157</option>
                                                                                            <option value="158">158</option>
                                                                                            <option value="159">159</option>
                                                                                            <option value="160">160</option>
                                                                                            <option value="161">161</option>
                                                                                            <option value="162">162</option>
                                                                                            <option value="163">163</option>
                                                                                            <option value="164">164</option>
                                                                                            <option value="165">165</option>
                                                                                            <option value="166">166</option>
                                                                                            <option value="167">167</option>
                                                                                            <option value="168">168</option>
                                                                                            <option value="169">169</option>
                                                                                            <option value="170">170</option>
                                                                                            <option value="171">171</option>
                                                                                            <option value="172">172</option>
                                                                                            <option value="173">173</option>
                                                                                            <option value="174">174</option>
                                                                                            <option value="175">175</option>
                                                                                            <option value="176">176</option>
                                                                                            <option value="177">177</option>
                                                                                            <option value="178">178</option>
                                                                                            <option value="179">179</option>
                                                                                            <option value="180">180</option>
                                                                                            <option value="181">181</option>
                                                                                            <option value="182">182</option>
                                                                                            <option value="183">183</option>
                                                                                            <option value="184">184</option>
                                                                                            <option value="185">185</option>
                                                                                            <option value="186">186</option>
                                                                                            <option value="187">187</option>
                                                                                            <option value="188">188</option>
                                                                                            <option value="189">189</option>
                                                                                            <option value="190">190</option>
                                                                                            <option value="191">191</option>
                                                                                            <option value="192">192</option>
                                                                                            <option value="193">193</option>
                                                                                            <option value="194">194</option>
                                                                                            <option value="195">195</option>
                                                                                            <option value="196">196</option>
                                                                                            <option value="197">197</option>
                                                                                            <option value="198">198</option>
                                                                                            <option value="199">199</option>
                                                                                            <option value="200">200</option>
                                                                                    </select>
                                        <div class="err" id="quantity"></div>
                                    </div>
        
        </td>
        <td>Course</td>
        <td>N/A</td>
        <td>$50</td>
        <td><button type="button" class="btn btn-info">Delete</button></td>
      </tr>
      <tr>
        <td><img src="/public/frontend/images/cart-1.jpg" alt="image" class="product-image" width="60px"></td>
        <td class="product-name">C++</td>
        <td>$50</td>
        <td>

          <div class="quantity">
                                        <select classname="select-board-size" id="select-qty" onchange="changeQuantity(this,25,49);">&gt;
                                                                                            <option value="1" selected="">1</option>
                                                                                            <option value="2">2</option>
                                                                                            <option value="3">3</option>
                                                                                            <option value="4">4</option>
                                                                                            <option value="5">5</option>
                                                                                            <option value="6">6</option>
                                                                                            <option value="7">7</option>
                                                                                            <option value="8">8</option>
                                                                                            <option value="9">9</option>
                                                                                            <option value="10">10</option>
                                                                                            <option value="11">11</option>
                                                                                            <option value="12">12</option>
                                                                                            <option value="13">13</option>
                                                                                            <option value="14">14</option>
                                                                                            <option value="15">15</option>
                                                                                            <option value="16">16</option>
                                                                                            <option value="17">17</option>
                                                                                            <option value="18">18</option>
                                                                                            <option value="19">19</option>
                                                                                            <option value="20">20</option>
                                                                                            <option value="21">21</option>
                                                                                            <option value="22">22</option>
                                                                                            <option value="23">23</option>
                                                                                            <option value="24">24</option>
                                                                                            <option value="25">25</option>
                                                                                            <option value="26">26</option>
                                                                                            <option value="27">27</option>
                                                                                            <option value="28">28</option>
                                                                                            <option value="29">29</option>
                                                                                            <option value="30">30</option>
                                                                                            <option value="31">31</option>
                                                                                            <option value="32">32</option>
                                                                                            <option value="33">33</option>
                                                                                            <option value="34">34</option>
                                                                                            <option value="35">35</option>
                                                                                            <option value="36">36</option>
                                                                                            <option value="37">37</option>
                                                                                            <option value="38">38</option>
                                                                                            <option value="39">39</option>
                                                                                            <option value="40">40</option>
                                                                                            <option value="41">41</option>
                                                                                            <option value="42">42</option>
                                                                                            <option value="43">43</option>
                                                                                            <option value="44">44</option>
                                                                                            <option value="45">45</option>
                                                                                            <option value="46">46</option>
                                                                                            <option value="47">47</option>
                                                                                            <option value="48">48</option>
                                                                                            <option value="49">49</option>
                                                                                            <option value="50">50</option>
                                                                                            <option value="51">51</option>
                                                                                            <option value="52">52</option>
                                                                                            <option value="53">53</option>
                                                                                            <option value="54">54</option>
                                                                                            <option value="55">55</option>
                                                                                            <option value="56">56</option>
                                                                                            <option value="57">57</option>
                                                                                            <option value="58">58</option>
                                                                                            <option value="59">59</option>
                                                                                            <option value="60">60</option>
                                                                                            <option value="61">61</option>
                                                                                            <option value="62">62</option>
                                                                                            <option value="63">63</option>
                                                                                            <option value="64">64</option>
                                                                                            <option value="65">65</option>
                                                                                            <option value="66">66</option>
                                                                                            <option value="67">67</option>
                                                                                            <option value="68">68</option>
                                                                                            <option value="69">69</option>
                                                                                            <option value="70">70</option>
                                                                                            <option value="71">71</option>
                                                                                            <option value="72">72</option>
                                                                                            <option value="73">73</option>
                                                                                            <option value="74">74</option>
                                                                                            <option value="75">75</option>
                                                                                            <option value="76">76</option>
                                                                                            <option value="77">77</option>
                                                                                            <option value="78">78</option>
                                                                                            <option value="79">79</option>
                                                                                            <option value="80">80</option>
                                                                                            <option value="81">81</option>
                                                                                            <option value="82">82</option>
                                                                                            <option value="83">83</option>
                                                                                            <option value="84">84</option>
                                                                                            <option value="85">85</option>
                                                                                            <option value="86">86</option>
                                                                                            <option value="87">87</option>
                                                                                            <option value="88">88</option>
                                                                                            <option value="89">89</option>
                                                                                            <option value="90">90</option>
                                                                                            <option value="91">91</option>
                                                                                            <option value="92">92</option>
                                                                                            <option value="93">93</option>
                                                                                            <option value="94">94</option>
                                                                                            <option value="95">95</option>
                                                                                            <option value="96">96</option>
                                                                                            <option value="97">97</option>
                                                                                            <option value="98">98</option>
                                                                                            <option value="99">99</option>
                                                                                            <option value="100">100</option>
                                                                                            <option value="101">101</option>
                                                                                            <option value="102">102</option>
                                                                                            <option value="103">103</option>
                                                                                            <option value="104">104</option>
                                                                                            <option value="105">105</option>
                                                                                            <option value="106">106</option>
                                                                                            <option value="107">107</option>
                                                                                            <option value="108">108</option>
                                                                                            <option value="109">109</option>
                                                                                            <option value="110">110</option>
                                                                                            <option value="111">111</option>
                                                                                            <option value="112">112</option>
                                                                                            <option value="113">113</option>
                                                                                            <option value="114">114</option>
                                                                                            <option value="115">115</option>
                                                                                            <option value="116">116</option>
                                                                                            <option value="117">117</option>
                                                                                            <option value="118">118</option>
                                                                                            <option value="119">119</option>
                                                                                            <option value="120">120</option>
                                                                                            <option value="121">121</option>
                                                                                            <option value="122">122</option>
                                                                                            <option value="123">123</option>
                                                                                            <option value="124">124</option>
                                                                                            <option value="125">125</option>
                                                                                            <option value="126">126</option>
                                                                                            <option value="127">127</option>
                                                                                            <option value="128">128</option>
                                                                                            <option value="129">129</option>
                                                                                            <option value="130">130</option>
                                                                                            <option value="131">131</option>
                                                                                            <option value="132">132</option>
                                                                                            <option value="133">133</option>
                                                                                            <option value="134">134</option>
                                                                                            <option value="135">135</option>
                                                                                            <option value="136">136</option>
                                                                                            <option value="137">137</option>
                                                                                            <option value="138">138</option>
                                                                                            <option value="139">139</option>
                                                                                            <option value="140">140</option>
                                                                                            <option value="141">141</option>
                                                                                            <option value="142">142</option>
                                                                                            <option value="143">143</option>
                                                                                            <option value="144">144</option>
                                                                                            <option value="145">145</option>
                                                                                            <option value="146">146</option>
                                                                                            <option value="147">147</option>
                                                                                            <option value="148">148</option>
                                                                                            <option value="149">149</option>
                                                                                            <option value="150">150</option>
                                                                                            <option value="151">151</option>
                                                                                            <option value="152">152</option>
                                                                                            <option value="153">153</option>
                                                                                            <option value="154">154</option>
                                                                                            <option value="155">155</option>
                                                                                            <option value="156">156</option>
                                                                                            <option value="157">157</option>
                                                                                            <option value="158">158</option>
                                                                                            <option value="159">159</option>
                                                                                            <option value="160">160</option>
                                                                                            <option value="161">161</option>
                                                                                            <option value="162">162</option>
                                                                                            <option value="163">163</option>
                                                                                            <option value="164">164</option>
                                                                                            <option value="165">165</option>
                                                                                            <option value="166">166</option>
                                                                                            <option value="167">167</option>
                                                                                            <option value="168">168</option>
                                                                                            <option value="169">169</option>
                                                                                            <option value="170">170</option>
                                                                                            <option value="171">171</option>
                                                                                            <option value="172">172</option>
                                                                                            <option value="173">173</option>
                                                                                            <option value="174">174</option>
                                                                                            <option value="175">175</option>
                                                                                            <option value="176">176</option>
                                                                                            <option value="177">177</option>
                                                                                            <option value="178">178</option>
                                                                                            <option value="179">179</option>
                                                                                            <option value="180">180</option>
                                                                                            <option value="181">181</option>
                                                                                            <option value="182">182</option>
                                                                                            <option value="183">183</option>
                                                                                            <option value="184">184</option>
                                                                                            <option value="185">185</option>
                                                                                            <option value="186">186</option>
                                                                                            <option value="187">187</option>
                                                                                            <option value="188">188</option>
                                                                                            <option value="189">189</option>
                                                                                            <option value="190">190</option>
                                                                                            <option value="191">191</option>
                                                                                            <option value="192">192</option>
                                                                                            <option value="193">193</option>
                                                                                            <option value="194">194</option>
                                                                                            <option value="195">195</option>
                                                                                            <option value="196">196</option>
                                                                                            <option value="197">197</option>
                                                                                            <option value="198">198</option>
                                                                                            <option value="199">199</option>
                                                                                            <option value="200">200</option>
                                                                                    </select>
                                        <div class="err" id="quantity"></div>
                                    </div>
        
        </td>
        <td>Course</td>
        <td>N/A</td>
        <td>$50</td>
        <td><button type="button" class="btn btn-info">Delete</button></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</section>

<section>
 <div class="container-fluid">  
<div class="row cart-actions">
<div class="col-sm-7">
<!--<div class="coupon">-->
<!--<label for="coupon_code">Coupon:</label> -->
<!--<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> -->
<!--<button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>-->
<!--</div>-->
</div>
<div class="col-sm-5 billing">
  <div class="Yorder">
   <h4 class="bill-address-you">CART TOTALS</h4>
    <table>
     
      <tbody>
      <tr>
        <td>Item(s) Subtotal</td>
        <td>$88.00</td>
      </tr>
      <tr>
        <td>Service total</td>
        <td>$0</td>
      </tr>  
      <tr>
        <td>Shipping</td>
        <td>$9.99</td>
      </tr>
      <tr>
        <td>GST</td>
        <td>$10.01</td>
      </tr>
      <tr>
        <td class="total">Amount Payable</td>
        <td class="total-amount">$120.00</td>
      </tr>
      
    </tbody>
    </table>
    <br>
    <div class="place-button text-center">
      <a href="/checkout.html"><button type="button" class="btn btn-secondary" >Proceed to checkout</button></a>
    </div>
    
  </div><!-- Yorder -->
</div>
</div>
    
   
</div>   
</section>

@stop
@section('js')

@endsection