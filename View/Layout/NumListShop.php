<div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="?page=shop&num=<?php if ($number != 1) echo $number-1; else echo $number; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li class="<?php if ($number == $listNum[0]) echo 'active'; ?>"><a href="?page=shop&num=<?php echo $listNum[0]; ?>"><?php echo $listNum[0]; ?></a></li>
                            <li class="<?php if ($number == $listNum[1]) echo 'active'; ?>"><a href="?page=shop&num=<?php echo $listNum[1]; ?>"><?php echo $listNum[1]; ?></a></li>
                            <li class="<?php if ($number == $listNum[2]) echo 'active'; ?>"><a href="?page=shop&num=<?php echo $listNum[2]; ?>"><?php echo $listNum[2]; ?></a></li>
                            <li class="<?php if ($number == $listNum[3]) echo 'active'; ?>"><a href="?page=shop&num=<?php echo $listNum[3]; ?>"><?php echo $listNum[3]; ?></a></li>
                            <li class="<?php if ($number == $listNum[4]) echo 'active'; ?>"><a href="?page=shop&num=<?php echo $listNum[4]; ?>"><?php echo $listNum[4]; ?></a></li>
                            <li>
                              <a href="?page=shop&num=<?php if ($number != $total) echo $number+1; else echo $number; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>