<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function Login()
    {
        header('Content-type:text/html;charset=utf-8');
       
      if(I('username'))//待修改；
         {
           
            $name=I('username');
            $password=I('password');
       		$verify  =I('checkcode');
    	    $Verify = new \Think\Verify();
    	    if(!$Verify->check($verify))
        		{
            		echo "<script language=JavaScript>alert('请正确填写验证码！');location.href='javascript:history.go(-1);';</script>";
        			die();
            	}
           	if($conn=M('admin'))
    			 	{
  			 	        $login=$conn->where("username="."'".$name."'")->find();
    			 		if($login)
    			 		{
    			 		 	
    			 		    if($conn->where("username="."'".$name."'"." and password="."'".md5($password)."'")->find())
                            {
                                cookie('org',$login['org']); 
                                if($login['org']=='')
                                {
                                    cookie("org",'admin');
                                }
                            cookie('login_time'.time());
                            $ip=$_SERVER['REMOTE_ADDR'];
                            cookie('ip',$ip);
                            cookie('admin',$name);
                            cookie('login','ok');
                            cookie('group',$user['type']);
                       
    			 			$this->redirect('Login/admin');//登陆成功以后跳转  
                            }
                            else
                            {
                              	echo "<script language=JavaScript>alert('用户密码错误！');location.href='javascript:history.go(-1);';</script>";
        		             	die();  	  
                                
                            }
    			 		    
    			 		}
    			 		else
    				    {	
    				       echo "<script language=JavaScript>alert('没有此用户！');location.href='javascript:history.go(-1);';</script>";	
                        }
    				   
    					    
    			 	}
           }
      else
      {
      
       $this->display();  
      }
   }
                                   
    public function verify()
	{
	$config = array( 'fontSize' => 19,
	                 'length' => 1, 
	                 'useNoise' => false,
					 'imageW'=>120,
				     'imageH'=>40,
				
					 );
   $Verify = new \Think\Verify($config);
   $Verify->useImgBg = false;//不适用背景图片 
   $Verify->entry();
	}
    //登陆成功
    public function admin ()
    {
        if(cookie('login')!="ok")
            {
             $this->redirect('Login/login'); 
            }
        else
        {
           $this->display(); 
        }
       
    }
    //frameset admin-> top
    public function top()
    {
      
       if(cookie('login')!="ok")
        {
            echo "非法访问！";
        	die();
        }
        $conn=M('admin');
        $conn->where('username='."'".cookie('admin')."'")->find();
        $limit = array("普通管理员","超级管理员");
        $admin=cookie('admin');
        $ip=$_SERVER['REMOTE_ADDR'];
        $this->assign('admin',$admin);
        $this->assign('ip',$ip);
        $time=$conn->where('username='."'".cookie('admin')."'")->find();
        $this->assign('login_time',$time['login_time']);
        $i=$conn->where('username='."'".cookie('admin')."'")->find();
        $i=$i['limit'];
        $organization='<li><a href="organization" target="menu-frame" hidefocus="true">社团管理</a></li>';
        if($i==1)
        {
            $this->assign('organization',$organization);
        }
        $this->assign('limit',$limit[$i]);
        $this->display();

    }
    //frameset admin->menu 添加左侧模块处
    public function menu()
    {

       if(cookie('login')!="ok")
       {
    	echo "非法访问！";
    	die();
       }
       $conn=M('admin');
        $rel=$conn->where('username='."'".cookie('admin')."'")->find();
        if($rel['limit']==1)
        { 
            $menu= '<li class="active" ><a href="manager" target="main-frame"> 管理员管理</a></li>'; 
        }
      
        $this->assign('menu',$menu);
       $this->display();
    }
    ////frameset admin->main
    public function main()
    {
        $this->assign('document',$_SERVER['DOCUMENT_ROOT']);
        $this->assign("software",$_SERVER['SERVER_SOFTWARE']);
        $this->assign("user_agent",$_SERVER['HTTP_USER_AGENT']);
        $this->display();
    }
    public function system()
    {
        
        $this->display();
    }
    //log off
    public function logoff()
   {    
          $conn=M('admin');
          $ip=$_SERVER['REMOTE_ADDR'];
          $data['ip']=$ip;
          $login_time=date("Y-m-d H:i:s");  
          $data['login_time']=$login_time;                          
          $A=$conn->where("username="."'".cookie('admin')."'")->save($data);
		   cookie('login',null);
          $this->redirect('Home/index/index');      
       
    }
    public function changepwd()
    {
       $conn=M('admin');
       if(I('id'))
       {
       $i=$conn->where("id="."'".I('id')."'")->find();
       $n = array("普通管理员","超级管理员");
       $m=$i['limit'];
       $this->assign('limit',$n[$m]);
       $this->assign('admin',$i['username']);
       $this->display();
       }
       else
       {
       $i=$conn->where('username='."'".cookie('admin')."'")->find();
       $n = array("普通管理员","超级管理员");
       $this->assign('admin',$i['username']);
       $m=$i['limit'];
       $this->assign('limit',$n[$m]);
       $this->display(); 
       }  
    }
     public function verifypwd()
    {
    $conn=M('admin');
    $data['password']=md5(I('password'));  
   if($conn->where("username="."'".cookie('admin')."'")->save($data))
   {
    $this->redirect("Login/main");
   }
   else
   {
   $this->redirect("Login/main");
   }
    }
    //管理员管理
    public function manager()
    {
     $conn=M('admin');   
     $count=$conn->count();// 查询满足要求的总记录数
     $p= new \Think\Page($count,25);
     $p->setConfig('prev', '上一页');
     $p->setConfig('next', '下一页');
     $p->setConfig('last', '末页');
     $p->setConfig('first', '首页');
     $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
     $p->lastSuffix = false;//最后一页不显示为总页数
     $list=$conn->field('id,username,limit,org')->order('id asc')->select();
     $n = array("普通管理员","超级管理员");//取出的limit全部替换为对应的管理身份
     for($i=0;$i<$count;$i++)
     {
     $list[$i]['limit']=$n[$list[$i]['limit']];
     }
     $this->assign('select', $list); // 赋值数据集
     $this->assign('page', $p->show()); // 赋值分页输出
     $this->show();
     
    }
    //删除管理员
    public function delmanager()
    {
      $conn=M('admin');
      $id=I('id');
      $conn->where('id='."'".$id."'")->delete();
      $this->redirect("Login/manager");  
    }
    //增加管理员
    public function addmanager()
    {
        $conn=M('organization');
    $rel=$conn->select();
    $num=count($rel);
    for($i=0;$i<$num;$i++)
    {
        $org.="<option value='".$rel[$i]['name']."'>".$rel[$i]['name']."</option>";
    }
    $this->assign('org',$org);
      $this->display();
    }
    public function addprocess()
    {
        $conn=M('admin');
        if(!$conn->where("username="."'".I('username')."'")->find())
        {
            $data['username']=I('username');
            $data['password']=md5(I('password'));
            $data['limit']=I('type');
            $data['org']=I('org');
            if($data['limit']==1)
            {
                $data['org']='';
            }
            
            if($conn->add($data))
            {    
             $this->redirect("Login/manager");     
            }
            else
            {
              echo "<script language=JavaScript>alert('添加失败！');location.href='manager;';</script>";  
                
            }
        }
        else
        {
          echo "<script language=JavaScript>alert('该用户名已存在！');location.href='javascript:history.go(-1);';</script>";  
        }
    }
    public function activity()
    {
        
       $this->display();
    }
    public function activitylist()
    {
        $conn=M('activity');
       $rel=$conn->select();
       $num=count($rel);
       for($i=0;$i<$num;$i++)
       {
         $list.="<tr class='list' align='center'><td>".$rel[$i]['title']."</td><td><a href='detailactivity?id=".$rel[$i]['id']."'>查看详情</a>&nbsp;<a  onclick='return del()'href='delactivity?id=".$rel[$i]['id']."'> 删除</a></td></tr>";
       }
       $this->assign('list',$list); 
        $this->display();
    }
    public function addactivity()
    {
       
       $this->display(); 
    }
    public function addactivitypro()
    {
     $data['title']=$_POST['title'];
     $data['content']=$_POST['content'];
     $data['add_time']=date('Y-m-d');
     $data['submitter']=session('user');
     $upload = new \Think\Upload();// 实例化上传类 
			$upload->maxSize = 3145728000 ;// 设置附件上传大小 
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
			$upload->rootPath = './Public/cover/'; // 设置附件上传根目录 
			$upload->autoSub=false;
			$info = $upload->uploadOne($_FILES['cover']);
			$data['cover']=$info['savename'];
   
     $conn=M('activity');
     if($conn->add($data))
     {
        echo "<script language=JavaScript>alert('添加成功！');location.href='activitylist';</script>";  
        
     }
       $this->display(); 
    }
    public function detailactivity()
    {
        $id=I('id');
        $conn=M('activity');
        $find=$conn->where("id=".$id)->find();
        $this->assign('title',$find['title']);
        $this->assign('content',$find['content']);
        $this->assign('cover',$find['cover']);

        $this->display();
    }
    public function delactivity()
    {
    $id=I('id');
    $conn=M('activity');
    $rel=$conn->where("id=".$id)->delete();
    if($rel)
    {
      echo "<script language=JavaScript>alert('删除成功！');location.href='activitylist';</script>";   
    }
    else
    {
       echo "<script language=JavaScript>alert('网路故障，请稍后再试！');location.href='javascript:history.go(-1);';</script>";   
    }
    }
    public function editactivity()
    {
        $id=I('id');
        $conn=M('activity');
        $rel=$conn->where("id=".$id)->find();
        $this->assign('title',$rel['title']);
        $this->assign('content',$rel['content']);
        $this->assign('id',$id);
        $this->display();
    }
    public function editactivitypro()
    {
        $id=I('id');
        $data['title']=$_POST['title'];
        $data['content']=$_POST['content'];
        $conn=M('activity');
        $rel=$conn->where('id='.$id)->save($data);
        if($rel)
        {
           echo "<script language=JavaScript>alert('修改成功！');location.href='activitylist';</script>";   
           die();
        }
        else
        {
          echo "<script language=JavaScript>alert('网络故障稍后再试！');location.href='javascript:history.go(-1);';</script>";   
           die();   
        }
        
    }
    public function moneylist()
    {
        $conn=M('money');
        $rel=$conn->where("org='".cookie('org')."'")->select();
        $num=count($rel);
        for($i=0;$i<$num;$i++)
        {
          $list.='<tr class="list" align="center"><td>'.$rel[$i]["theme"].'</td><td>'.$rel[$i]["matter"].'</td><td>'.$rel[$i]["payment"].'</td><td>'.$rel[$i]["submitter"].'</td><td>'.$rel[$i]["time"].'</td><td><a href="editmoney?id='.$rel[$i]["id"].'">编辑</a>&nbsp;<a href="delmoney?id='.$rel[$i]["id"].'" onclick="return del()" >删除</a></td></tr>';  
        }
        $org=M('organization');
        $rel1=$org->where("name='".cookie('org')."'")->find();
        $this->assign('count',$rel1['deposit']);
          $this->assign('list',$list);
          $this->display();
    } 
    public function delmoney()
    {
        $id=I('id');
        $conn=M('money');
        $rel=$conn->where("id=".$id)->delete();
        if($rel)
        {
           echo "<script language=JavaScript>alert('删除成功！');location.href='moneylist';</script>";   
           die();  
        }
        else
        {
           echo "<script language=JavaScript>alert('网络故障稍后再试！');location.href='javascript:history.go(-1);';</script>";   
           die();    
        }
    }
    public function editmoney()
    {
        $id=I('id');
        $conn=M('money');
        $rel=$conn->where("id=".$id)->find();
        $this->assign('id',$rel['id']);
        $this->assign('theme',$rel['theme']);
        $this->assign('matter',$rel['matter']);
        $this->assign('payment',$rel['payment']);
        $this->display();
    }
    public function editmoneypro()
    {
      $id=I('id');
      $data['theme']=I('theme');
      $data['matter']=I('matter');
      $data['payment']=I('payment');
      $conn=M('money');
      $rel=$conn->where("id=".$id)->save($data);  
        if($rel)
        {
           echo "<script language=JavaScript>alert('修改成功！');location.href='moneylist';</script>";   
           die();     
        }
        else
        {
         echo "<script language=JavaScript>alert('网络错误，请重试！');location.href='moneylist';</script>";   
           die();    
        }
        
        
    }
    public function legaluser()
    {
        $conn=M('login');
        $rel=$conn->where("legal=1 and org='".cookie('org')."'")->select();
        if(cookie('org')=="admin")
        {
        $rel=$conn->where("legal=1")->select();    
        }
        $num=count($rel);
        for($i=0;$i<$num;$i++)
        {   
            
            
            $legal='<a href="forbidlogin?id='.$rel[$i]["id"].'"><button>禁止登陆</button></a>';
            $j=$i+1;
            $list.="<tr class='list' align='center'><td>".$j."</td><td>".$rel[$i]['account']."</td><td>".$rel[$i]['name']."</td><td>".$rel[$i]['org']."</td><td>".$legal."</td></tr>";
        }
        $this->assign('list',$list);
        $this->display();
        
    }
    public function illegaluser()
    {
        $conn=M('login');
        
        $rel=$conn->where("legal=0 and org='".cookie('org')."'")->select();
        if(cookie("org")=="admin")
        {
          $rel=$conn->where("legal=0")->select();  
        }
        $num=count($rel);
        for($i=0;$i<$num;$i++)
        {   
            
            
            $legal='<a href="allowlogin?id='.$rel[$i]["id"].'"><button>通过验证</button></a>';
            $j=$i+1;
            $list.="<tr class='list' align='center'><td>".$j."</td><td>".$rel[$i]['account']."</td><td>".$rel[$i]['name']."</td><td>".$rel[$i]['org']."</td><td>".$rel[$i]['time']."</td><td>".$legal."</td></tr>";
        }
        $this->assign('list',$list);
        $this->display();
        
    }
    public function forbidlogin()
    {
      $id=I('id');
      $conn=M('login');
      $data['legal']=0;
      $rel=$conn->where("id=".$id)->save($data);
      if($rel)
      {
         echo "<script language=JavaScript>alert('已禁止该用户登陆！');location.href='illegaluser';</script>";   
           die(); 
      }
    }
    public function allowlogin()
    {
      $id=I('id');
      $conn=M('login');
      $data['legal']=1;
      $rel=$conn->where("id=".$id)->save($data);
      if($rel)
      {
         echo "<script language=JavaScript>alert('已允许该用户登陆！');location.href='legaluser';</script>";   
           die(); 
      }
    }
    public function organization()
    {
        
      $this->display();
    }
    public function orglist()
    {
        $conn=M('organization');
      $rel=$conn->select();
      $num=count($rel);
      for($i=0;$i<$num;$i++)
      {
       $list.='<tr align="center" class="list"><td>'.$rel[$i]["name"].'</td><td><a onclick="return del()" href="delorg?id='.$rel[$i]["id"].'">删除 <a >&nbsp;<a href="editorg?id='.$rel[$i]["id"].'">编辑</a></td></tr>'; 
      }
      $this->assign('list',$list);
      $this->display();
    }
     public function addorg()
    {
      $this->display();
    }
     public function addorgpro()
    {
      $name=I('name');
      $conn=M('organization');
      $data['name']=$name;
      $conn->add($data);
      $this->redirect('Login/orglist');
    }
     public function delorg()
    {
        $id=I('id');
    $conn=M('organization');
    $rel=$conn->where("id=".$id)->delete();
    if($rel)
    {
        echo "<script language=JavaScript>alert('删除成功！');location.href='orglist';</script>";   
           die(); 
    }
    $this->display();
    }    
     public function editorg()
    {
    $id=I('id');
    $conn=M('organization');
    $rel=$conn->where("id=".$id)->find();
    $this->assign('name',$rel['name']);
    $this->assign('id',$id);
    $this->display();
    }   
    public function editorgpro()
    {
    $id=I('id');
    $data['name']=I('name');
    $conn=M('organization');
    $conn->where("id=".$id)->save($data);
    $this->redirect('Login/orglist');
    }    

 }
    ?>