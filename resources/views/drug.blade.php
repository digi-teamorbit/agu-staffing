@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

      <section class="page_title cs gradientvertical-background s-py-25">
        <div class="container">
          <div class="row">

            <div class="divider-50"></div>

            <div class="col-md-12 text-center">
              <h1 class="">{{$cms_drug->name}}</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>

                <li class="breadcrumb-item active">
                  {{$cms_drug->name}}
                </li>
              </ol>
            </div>

            <div class="divider-50"></div>

          </div>
        </div>
      </section>



      <section class="drug_test">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="drug_alcohol">
                <h3>DRUG AND ALCOHOL POLICY</h3>
                <br>
                <div class="question">
                  <h5>Q.1: If a supervisor is aware of an employee who is exhibiting signs of intoxication such as being disoriented, slurred speech, or using an inappropriate tone with coworkers, he/she will:</h5>
                  <div class="answers">
                    <input type="radio" name="a">
                    <label for="a">A. State concerns to the employee and have them explain what is going on</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="a">
                    <label for="a">B. Based on employee response, suspend employee until a formal investigation is completed</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="a">
                    <label for="a">C. Have employee escorted home; do not allow them to drive</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="a">
                    <label for="a">D. All of the above</label>
                  </div>
                </div>

                <div class="question">
                  <h5>Q.2: A worker’s responsibilities for safety include:</h5>
                  <div class="answers">
                    <input type="radio" name="b">
                    <label for="b">A. Have an understanding of the workplace policy on alcohol and drug use</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="b">
                    <label for="b">B. Use medications responsibly, be aware of potential side effects, and notify supervisor and employer of any potential unsafe side effects</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="b">
                    <label for="b">C. Encourage co-workers to seek help when there is a potential breach or breach of policy</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="b">
                    <label for="b">D. All of the above</label>
                  </div>
                </div>


                <div class="question">
                  <h5>Q.3: Consuming recreational cannabis in the workplace is:</h5>
                  <div class="answers">
                    <input type="radio" name="c">
                    <label for="c">A. Allowed, people who 19 and older can smoke and vape cannabis at anywhere after cannabis legalization in Canada</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="c">
                    <label for="c">B. Illegal, Ontario has strict rules in place to make sure workplaces are safe</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.4: The employee will NOT be terminated if a health care professional has already authorized him/her to use cannabis for medical reasons</h5>
                  <div class="answers">
                    <input type="radio" name="d">
                    <label for="d">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="d">
                    <label for="d">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.5: Where an AGU Staffing Temporary Employee is assigned to a safety-sensitive position at a customer site, the Employee may be subject to random Drug and Alcohol testing if he/she is suspected of impairment while on the job</h5>
                  <div class="answers">
                    <input type="radio" name="e">
                    <label for="e">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="e">
                    <label for="e">B. False</label>
                  </div>
                  
                </div>
              </div>
              <div class="drug_alcohol">
                <h3>BASIC SKILLS AND SAFETY TEST</h3>
                <br>
                <div class="question">
                  <h5>Q.1: Calculate: 492 - 377 =</h5>
                  <div class="answers">
                    <input type="radio" name="f">
                    <label for="f">a) 115</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="f">
                    <label for="f">b) 105</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="f">
                    <label for="f">c) 125</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="f">
                    <label for="f">d) 116</label>
                  </div>
                </div>

                <div class="question">
                  <h5>Q.2: If you have a skid with 10 boxes high and 5 boxes wide, how many boxes are on the skid?</h5>
                  <div class="answers">
                    <input type="radio" name="g">
                    <label for="g">a) 15</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="g">
                    <label for="g">b) 5</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="g">
                    <label for="g">c) 50</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="g">
                    <label for="g">d) 2</label>
                  </div>
                </div>


                <div class="question">
                  <h5>Q.3: Please read the paragraphs and answer the questions: Health and Safety, both on and off job, is essential to the quality of life experienced by us all. As such, the management of AGU Staffing Inc.is committed to ensuring that our employees have a safe and healthy workplace, and the necessary awareness and training so they may live and work safely. Responsibility for Health and Safety ultimately rests with the senior management, but the work site managers and supervisors, and all employees are held accountable for health and safety. What is TRUE about this paragraph?</h5>
                  <div class="answers">
                    <input type="radio" name="h">
                    <label for="h">a) Health and Safety is only for the senior management.</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="i">
                    <label for="i">b) Health and Safety is only for on the job.</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="i">
                    <label for="i">c) Health and Safety is the responsibility of all employees.</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.4: Please read the paragraphs and answer the questions: What is true about this paragraph? Health and Safety, both on and off job, is essential to the quality of life experienced by us all. As such the management of AGU Staffing Inc. is committed to ensuring that our employees have a safe and healthy workplace, and the necessary awareness and training so they may live and work safely. Responsibility for Health and Safety ultimately rests with the senior management, but the worksite managers and supervisors, and all employees are held accountable for health and safety.</h5>
                  <div class="answers">
                    <input type="radio" name="j">
                    <label for="j">a) AGU Staffing is not committed to safety.</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="j">
                    <label for="j">b) AGU Staffing wants employees to live and work safely.</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="j">
                    <label for="j">c) AGU Staffing does not train the employees about safety</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.5: If you injure yourself at work you must report it to your supervisor immediately.</h5>
                  <div class="answers">
                    <input type="radio" name="k">
                    <label for="k">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="k">
                    <label for="k">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.6: A neutral position prevents back strain by keeping your center of gravity between your legs and your spinal column, properly aligned?</h5>
                  <div class="answers">
                    <input type="radio" name="l">
                    <label for="l">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="l">
                    <label for="l">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.7: Lock Out Tag Out is used to prevent the unexpected startup of equipment.</h5>
                  <div class="answers">
                    <input type="radio" name="m">
                    <label for="m">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="m">
                    <label for="m">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.8: It's important to know your evacuation routes and the location of emergency exits.</h5>
                  <div class="answers">
                    <input type="radio" name="n">
                    <label for="n">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="n">
                    <label for="n">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.9: I am responsible to wear all the appropriate PPE on the job (safety glasses, safety shoes, no loose clothing, no jewelry).</h5>
                  <div class="answers">
                    <input type="radio" name="o">
                    <label for="o">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="o">
                    <label for="o">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.10: You can operate a forklift at workplace as long as you have had training in the last 10 years.</h5>
                  <div class="answers">
                    <input type="radio" name="p">
                    <label for="p">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="p">
                    <label for="p">B. False</label>
                  </div>
                  
                </div>
              </div>

              <div class="drug_alcohol">
                <h3>SAFETY IN WORKPLACE TEST</h3>
                <br>
                

                <div class="question">
                  <h5>Q.1: You should wear hairnets when entering the production area to cover your ears and sideburns.</h5>
                  <div class="answers">
                    <input type="radio" name="q">
                    <label for="q">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="q">
                    <label for="q">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.2: Gum chewing, spitting and tobacco chewing is not allowed in the factory. You also cannot hold toothpicks or similar objects in your mouth.</h5>
                  <div class="answers">
                    <input type="radio" name="r">
                    <label for="r">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="r">
                    <label for="r">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.3: The same hand washing procedure is used for both rubber gloves and hands.</h5>
                  <div class="answers">
                    <input type="radio" name="s">
                    <label for="s">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="s">
                    <label for="s">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.4: You should leave the food production areas if excessive, uncontrollable coughing or sneezing occurs.</h5>
                  <div class="answers">
                    <input type="radio" name="t">
                    <label for="t">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="t">
                    <label for="t">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.5: You only allowed to eat, drink and snacking of our products in cafeteria, not in locker rooms, production or other processing area.</h5>
                  <div class="answers">
                    <input type="radio" name="u">
                    <label for="u">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="u">
                    <label for="u">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.6: Smoking is only allowed in certain area such as patio outside lunch room and employee entrance and uniform must be covered while in this area.</h5>
                  <div class="answers">
                    <input type="radio" name="v">
                    <label for="v">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="v">
                    <label for="v">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.7: You must cover all open cuts and wounds with a waterproof bandage and a blue metal detected band aids.</h5>
                  <div class="answers">
                    <input type="radio" name="w">
                    <label for="w">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="w">
                    <label for="w">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.8: Cell phones, cameras, Walkman’s and any other electronic devices are not allowed in any production area, warehouse and shipping area.</h5>
                  <div class="answers">
                    <input type="radio" name="x">
                    <label for="x">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="x">
                    <label for="x">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.9: It is okay to bring your lab coats in lunchroom as long as you are not eating with your coats on.</h5>
                  <div class="answers">
                    <input type="radio" name="y">
                    <label for="y">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="y">
                    <label for="y">B. False</label>
                  </div>
                  
                </div>
              </div>



              <div class="drug_alcohol">
                <h3>VIOLENCE AND HARASSMENT TEST</h3>
                <br>
                

                <div class="question">
                  <h5>Q.1: Employees are subject to disciplinary action, up to and including termination for engaging in unlawful harassment or discrimination.</h5>
                  <div class="answers">
                    <input type="radio" name="z">
                    <label for="z">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="z">
                    <label for="z">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.2: Sexual harassment includes unwelcome sexual advances or romantic interest, or other unwelcome conduct that may be verbal, visual, or physical.</h5>
                  <div class="answers">
                    <input type="radio" name="aa">
                    <label for="aa">A. True</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="aa">
                    <label for="aa">B. False</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.3: All employees are obligated to</h5>
                  <div class="answers">
                    <input type="radio" name="bb">
                    <label for="bb">a) Work and behave in such a way that is not consider violent or harassing</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="bb">
                    <label for="bb">b) Report incidents of workplace of workplace violence and harassment to their managers/ supervisors/ leader</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="bb">
                    <label for="bb">c) Both (a) and (b)</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.4: The changes to the law pertaining to workplace sexual harassment, known as Bill 132, arises out of changes to,</h5>
                  <div class="answers">
                    <input type="radio" name="cc">
                    <label for="cc">a) The Occupational Health and Safety Act</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="cc">
                    <label for="cc">b) The Building Code</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="cc">
                    <label for="cc">c) The HR Policy Manual</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.5: Which of the following is not considered as harassment</h5>
                  <div class="answers">
                    <input type="radio" name="dd">
                    <label for="dd">a) Receiving feedback about our performance on the job</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="dd">
                    <label for="dd">b) Unwanted touching, hugging, etc.)</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="dd">
                    <label for="dd">c) Sexual remarks/jokes</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="dd">
                    <label for="dd">d) All of the above</label>
                  </div>
                </div>

                
              </div>



              <div class="drug_alcohol">
                <h3>WHMIS TEST</h3>
                <br>
                

                <div class="question">
                  <h5>Q.1: WHMIS provides information to workers about hazardous materials through which of the following method(s)?</h5>
                  <div class="answers">
                    <input type="radio" name="ee">
                    <label for="ee">a) Supplier & Workplace labels</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="ee">
                    <label for="ee">b) Safety Data Sheets</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="ee">
                    <label for="ee">c) Worker education & training</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="ee">
                    <label for="ee">d) All of the above</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.2: Which of the following are potential effects of a health hazard?</h5>
                  <div class="answers">
                    <input type="radio" name="ff">
                    <label for="ff">a) Explosive</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="ff">
                    <label for="ff">b) Aspiration Hazard</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="ff">
                    <label for="ff">c) Reactivity</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="ff">
                    <label for="ff">d) Flammable</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.3: Workplace labels are required when:</h5>
                  <div class="answers">
                    <input type="radio" name="gg">
                    <label for="gg">a) Products are transferred from its original supplier container into another container</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="gg">
                    <label for="gg">b) The supplier label is missing or illegible</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="gg">
                    <label for="gg">c) The product is produced in the workplace</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="gg">
                    <label for="gg">d) All of the above</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.4: A Safety Data Sheet (SDS) is available in the workplace to:</h5>
                  <div class="answers">
                    <input type="radio" name="hh">
                    <label for="hh">a) Assist the purchasing department in buying chemicals</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="hh">
                    <label for="hh">b) Describe workplace policy</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="hh">
                    <label for="hh">c) Provide detailed hazard and safety information about a controlled product</label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.5: Which pictogram represents materials that pose a fire hazard?</h5>
                  <div class="answers">
                    <input type="radio" name="ii">
                    <label for="ii">a) <img src="{{asset('images/fire_hazard_1.png')}}"></label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="ii">
                    <label for="ii">b) <img src="{{asset('images/fire_hazard_2.png')}}"></label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="ii">
                    <label for="ii">c)<img src="{{asset('images/fire_hazard_3.png')}}"></label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="ii">
                    <label for="ii">d) <img src="{{asset('images/fire_hazard_4.png')}}"></label>
                  </div>
                </div>


                <div class="question">
                  <h5>Q.6: Which pictogram would you find on a product that has an acute toxicity health hazard?</h5>
                  <div class="answers">
                    <input type="radio" name="jj">
                    <label for="jj">a) <img src="{{asset('images/fire_hazard_4.png')}}"></label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="jj">
                    <label for="jj">b) <img src="{{asset('images/health_hazard_3.png')}}"></label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="jj">
                    <label for="jj">c)<img src="{{asset('images/health_hazard_2.png')}}"></label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="jj">
                    <label for="jj">d) <img src="{{asset('images/fire_hazard_2.png')}}"></label>
                  </div>
                </div>

                <div class="question">
                  <h5>Q.7: Which symbol is NOT to be implemented under WHMIS 2015?</h5>
                  <div class="answers">
                    <input type="radio" name="hh">
                    <label for="hh">a) <img src="{{asset('images/fire_hazard_3.png')}}"></label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="hh">
                    <label for="hh">b) <img src="{{asset('images/fire_hazard_1.png')}}"></label>
                  </div>
                  
                </div>

                <div class="question">
                  <h5>Q.8: Under WHMIS 2015, an employee is responsible for:</h5>
                  <div class="answers">
                    <input type="radio" name="kk">
                    <label for="kk">a) Participating in education and training provided by the employer</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="kk">
                    <label for="kk">b) Following prescribed safe work procedures</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="kk">
                    <label for="kk">c) Identifying and controlling hazards</label>
                  </div>
                  <div class="answers">
                    <input type="radio" name="kk">
                    <label for="kk">d) All of the above</label>
                  </div>
                  
                </div>

                
              </div>
              <div class="paper_submit">
                <button type="submit">SUBMIT</button>
              </div>
            </div>
          </div>
        </div>
      </section>

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>

@endsection