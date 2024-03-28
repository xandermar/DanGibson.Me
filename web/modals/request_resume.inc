    <form action="request_resume.php" method="post">
                     <div class="form-group"> <label for="first_name">First Name</label> <input type="text" class="form-control" id="first_name" name="first_name" required> </div>
                     <div class="form-group"> <label for="last_name">Last Name</label> <input type="text" class="form-control" id="last_name" name="last_name" required> </div>
                     <div class="form-group"> <label for="company">Company</label> <input type="text" class="form-control" id="company" name="company" required> </div>
                     <div class="form-group"> <label for="email">Email Address</label> <input type="email" class="form-control" id="email" name="email" required></div>
                     <div class="form-group">
                        <label for="reason">Reason for resume request?</label> 
                        <select class="form-control" id="reason" name="reason" required>
                           <option value="">Please select</option>
                           <option value="work_opportunity">Work opportunity</option>
                           <option value="other">Other</option>
                        </select>
                     </div>
                     <div class="form-group" id="otherReasonField" style="display: none;"> <label for="other_reason">Please specify reason</label> <textarea class="form-control" id="other_reason" name="other_reason"></textarea> </div>
                     <button type="submit" class="btn btn-primary mt-3">Submit</button> 
                  </form>