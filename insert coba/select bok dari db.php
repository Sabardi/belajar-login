 <!-- nama perangkat -->
 <div class="mb-3">
                        <select class="form-control" name="id_pelanggan" id="id_pelanggan" required>
                            <option value="">Pilih Pelanggan</option>
                            <?php
                                foreach($database = $database->Data_Pelanggan() as $data){
                            ?>
                            <option value="<?= $data['id_pelanggan']?>"> <?= $data['nama']?></option>
                            <?php
                                }
                            ?>
                        </select>
                      
                    </div>