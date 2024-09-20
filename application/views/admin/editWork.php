 <form action="<?=base_url('work/update/').$work['id'] ?>" method="post" class="form-horizontal">
          <div class="form-group">
            <label>Engineer</label>
            <input type="text" class="form-control" name="engineer" id="engineer" value="<?=$work['name'] ?>" readonly>
          </div>
          <div class="form-group">
            <label>Job</label>
            <select class="form-control" name="job" id="job">
               <option value="<?=$work['jobId'] ?>"><?= $work['job'] ?></option>
              <option>------------------------------</option>
              <?php foreach ($job as $j) : ?>
                <option value="<?=$j['id']; ?>"><?=$j['job']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Location</label>
            <select class="form-control" name="location" id="location">
               <option value="<?=$work['locationId'] ?>"><?= $work['location'] ?></option>
              <option>------------------------------</option>
              <?php foreach ($location as $l) : ?>
                <option value="<?=$l['id']; ?>"><?=$l['location']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
         <!--  <div class="form-group">
            <label>Shift</label>
            <select class="form-control" name="shift" id="shift">
               <option value="<?=$work['shiftId'] ?>"><?= $work['shift'] ?></option>
              <option>------------------------------</option>
              <?php foreach ($shift as $s) : ?>
                <option value="<?=$s['id']; ?>"><?=$s['shift']; ?></option>
              <?php endforeach; ?>
            </select>
          </div> -->
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" value="Save" class="btn btn-primary "/>
        </form>