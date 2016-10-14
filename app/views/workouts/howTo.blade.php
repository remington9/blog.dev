
@extends('layouts.masterWO')

@section('title')
    <title>How To</title>
@stop

@section('content')

<form name="maxrep1">
<div class="maxrep-box form-group">
<h3 class="article-title" color:"#000000;"="" style="margin-top:5px; margin-left:8px;">Calculate Your One-Rep Max (1RM)</h3>
<hr>
<table border="0" cellspacing="0" cellpadding="4" width="100%" class="table table-striped">
        <tbody> 
        <tr> 
          <td width="40%" align="center"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tbody><tr> 
                <td height="126" width="226">
                  <p>
                    <label for="">Weight lifted</label>
                    <input size="5" name="lifted" required="required" class="form-control"><br>
                    <label for="">Reps Done</label>
                    <select name="reps" size="1" class="form-control input-lg">
                        <option value="0" selected="selected">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                  </p>
                  <p align="center">
                    <input onclick="maxrep1calculate()" type="button" class="btn btn-primary btn-lg" value="Compute" name="button">
                    <input type="reset" value="Reset" class="btn btn-warning btn-lg" name="Reset">
                  </p>
                  <p>
                    <fieldset disabled>
                    <label>One-rep Max</label>
                    <input size="5" name="onehundred" class="form-control">
                    </fieldset>
                 </p>
                </td>
              </tr>
            </tbody></table>
          </td>
          <td width="30%" height="112"> 
            <fieldset disabled>
            <dl> 
              <dt>
                <label>95% 1 RM</label>
                <input size="5" class="form-control" name="ninetyfive"></dt>
              <dt>
                <label>90% 1 RM</label>
                <input size="5" class="form-control" name="ninety"></dt>
              <dt>
                <label>85% 1 RM</label>
                <input size="5" class="form-control" name="eightyfive"></dt>
              <dt>
                <label>80% 1 RM</label>
                <input size="5" class="form-control" name="eighty"></dt>
              <dt>
                <label>75% 1 RM</label>
                <input size="5" class="form-control" name="seventyfive"></dt>
            </dl>
            </fieldset>

          </td>
          <td width="30%"> 
                        <fieldset disabled>

            <dl> 
              <dt>
                <label>70% 1 RM</label>
                <input size="5" class="form-control" name="seventy"></dt>
              <dt>
                <label>65% 1 RM</label>
                <input size="5" class="form-control" name="sixtyfive"></dt>
              <dt>
                <label>60% 1 RM</label>
                <input size="5" class="form-control" name="sixty"></dt>
              <dt>
                <label>55% 1 RM</label>
                <input size="5" class="form-control" name="fiftyfive"></dt>
              <dt>
                <label>50% 1 RM</label>
                <input size="5" class="form-control" name="fifty"></dt>
            </dl>
          </td>
            </fieldset>

        </tr>
        </tbody> 
      </table>
    </div>
    <br>
  </form>
    <div class="row">
        <div class="col-md-8">
            <h3 class="dpg-h3">Using the Table</h3>
            <hr>
            <p>Find the number of reps to concentric failure that you can perform with a certain weight.  In other words, if you can only do eight reps with a certain weight and could not possibly do another full rep, that is your point of failure. Find the percentage associated with that number of repetitions from the table above.</p>
        </div>
        <div class="col-md-4">
            <div class="well">
            <h4 class="article-small-title" style="color:#00aeef; text-align:center;"><u>1 Rep Max Percentages</u></h4>
            <table class=" table table-striped table-bordered">
                <tbody><tr>
                <td class="table-bg-white-column-head">Reps</td>

                <td class="table-bg-white-column-head">%1RM</td>
                </tr>

                <tr>
                <td class="table-bg-normal">1</td>

                <td class="table-bg-normal">100</td>
                </tr>

                <tr>
                <td class="table-bg-white">2</td>

                <td class="table-bg-white">95</td>
                </tr>

                <tr>
                <td class="table-bg-normal">3</td>

                <td class="table-bg-normal">90</td>
                </tr>

                <tr>
                <td class="table-bg-white">4</td>

                <td class="table-bg-white">88</td>
                </tr>

                <tr>
                <td class="table-bg-normal">5</td>

                <td class="table-bg-normal">86</td>
                </tr>

                <tr>
                <td class="table-bg-white">6</td>

                <td class="table-bg-white">83</td>
                </tr>

                <tr>
                <td class="table-bg-normal">7</td>

                <td class="table-bg-normal">80</td>
                </tr>

                <tr>
                <td class="table-bg-white">8</td>

                <td class="table-bg-white">78</td>
                </tr>

                <tr>
                <td class="table-bg-normal">9</td>

                <td class="table-bg-normal">76</td>
                </tr>

                <tr>
                <td class="table-bg-white">10</td>

                <td class="table-bg-white">75</td>
                </tr>

                <tr>
                <td class="table-bg-normal">11</td>

                <td class="table-bg-normal">72</td>
                </tr>

                <tr>
                <td class="table-bg-white">12</td>

                <td class="table-bg-white">70</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
  </div>

  @stop

  @section('script')

        <script>
        function maxrep1calculate()
        {
            var lifted = parseFloat(document.maxrep1.lifted.value);
            // alert(lifted);
            var reps = document.maxrep1.reps.options[document.maxrep1.reps.selectedIndex].value;
            var answer = 0;
            if ((reps == 0) || (lifted <= 0) || (lifted == '') || isNaN(lifted)) {
                alert('Please enter the weight you lifted & select the number of reps you completed.');
                return false;
            }
            else if (reps == 10) {
                answer = Math.round(lifted*(4/3));
            } else {
                answer = Math.round(lifted*(1/(1.0278-(reps*.0278))));
            }
            document.maxrep1.onehundred.value = Math.round(answer*10)/10;
            document.maxrep1.ninetyfive.value = Math.round((answer/(20/19))*10)/10;
            document.maxrep1.ninety.value = Math.round((answer/(10/9))*10)/10;
            document.maxrep1.eightyfive.value = Math.round((answer/(20/17))*10)/10;
            document.maxrep1.eighty.value = Math.round((answer/(5/4))*10)/10;
            document.maxrep1.seventyfive.value = Math.round((answer/(4/3))*10)/10;
            document.maxrep1.seventy.value = Math.round((answer/(10/7))*10)/10;
            document.maxrep1.sixtyfive.value = Math.round((answer/(20/13))*10)/10;
            document.maxrep1.sixty.value = Math.round((answer/(5/3))*10)/10;
            document.maxrep1.fiftyfive.value = Math.round((answer/(20/11))*10)/10;
            document.maxrep1.fifty.value = Math.round((answer/2)*10)/10;
        }

        </script>

  @stop