<form  action ="addPres.php" method="post">
            <input type="label" id="doctor-id" value="Doctor ID: 990" disabled> 
            <input type="label" id="patient-id" value="Patient ID: 990" disabled>
                        <input name="symptoms_detected" type="text" class="form-control" id="symptoms_detected" placeholder="Symptoms" size="28" style="width: 50%" />  
            <input name="detected_disease" type="text" class="form-control" id="detected_disease" placeholder="Detected Disease" size="28" style="width: 50%" />
            <button onclick="addMed(); return false;" class="form-control"  style="width: 50%;background-color: #99dfff">Add Medicine Prescription</button>
            <!--<input name="Medicines" type="text" class="form-control" id="Medicines" placeholder="Medicines" size="28" style="width: 50%" />-->
            <div id ="MedIncr"></div>
            <script type="text/javascript">
                var med=1;
                write=document.getElementById('MedIncr');
                function addMed()
                {
                write.insertAdjacentHTML('beforeend',"<span id=\"Medicine" + med + "\"><input type=\"text\"  placeholder=\"Medicine Serial " + med + "\" class=\"form-control\" style=\"width: 50%;display:inline\" name=\"MedicineName" + med + "\">&nbsp<input type=\"radio\" name=\"aORb\" value=\"after\" style=\"display:inline\">After</input> <input type=\"radio\" name=\"aORb\" value=\"before\"style=\"display:inline\">Before</input>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=\"checkbox\" name=\"MedicineName" + med + "01\" value=\"breakfast\"style=\"display:inline;\">Breakfast</input>&nbsp<input type=\"checkbox\" name=\"MedicineName" + med + "02\" value=\"lunch\"style=\"display:inline\">Lunch</input>&nbsp<input type=\"checkbox\" name=\"MedicineName" + med + "03\" value=\"dinner\"style=\"display:inline\">Dinner</input><button onclick=\"removeMed(this.parentNode.id);\" style=\"display:inline;background-color: #ff6666\">X</button></span>");
                    med=med + 1;
                }
                function removeMed(idSent){
                    var elem = document.getElementById(idSent);
                    elem.parentNode.removeChild(elem);
                    return false;
                }
            </script>
            <input name="Fees" type="text" class="form-control" id="Fees" placeholder="Fees Charged" size="28" style="width: 50%" />
            <input type="submit" value="Save" name="saveBtn" />
            </form>

</html>