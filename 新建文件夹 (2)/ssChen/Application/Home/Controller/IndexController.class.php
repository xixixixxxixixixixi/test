<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $this->show() ;
    }
      public function loginpro()
    {
        $account=I('account');
        session('user',$account);
        $password=md5(I('password'));
        $conn=M('login');
        $find=$conn->where('account='.$account)->find();
        
        if($find)
        {
          $rel=$conn->where('account="'.$account.'" and password="'.$password.'"')->find();
          if($rel)
              {
              if($rel['legal']==1)
                {
                    session('org',$rel['org']);
                    $this->redirect('Index/home');
                }
              else
                {
                 echo "<script language=JavaScript>alert('注册暂未获得管理员认证，请耐心等待！');location.href='javascript:history.go(-1)';
    	        </script>"; 
                die();    
                }
            }
            else
            {
               echo "<script language=JavaScript>alert('密码错误！');location.href='javascript:history.go(-1)';
    	        </script>"; 
                die();    
            }
          
        }
        else
        {
          echo "<script language=JavaScript>alert('用户不存在！');location.href='javascript:history.go(-1)';
    	        </script>"; 
                die();   
        }
       
    }
    public function register()
    {
    //数据表login中legal 1=>"管理员已经验证" 0=>"管理员未验证" 
    $conn=M('organization');
    $rel=$conn->select();
    $num=count($rel);
    for($i=0;$i<$num;$i++)
    {
        $option.="<option value='".$rel[$i]['name']."'>".$rel[$i]['name']."</option>";
    }
    $this->assign('option',$option);
    $this->show(); 
    }
    public function registerpro()
    {
    $data['org']=I('org');
    $data['account']=I('account');
    $data['password']=md5(I('password'));
    $data['legal']=0;
    $data['name']=I('name');
    $length=strlen($data['account']);
    if(($length!=10)&&($length!=11))
        {
          echo "<script language=JavaScript>alert('账号格式不正确！');location.href='javascript:history.go(-1)';
    	        </script>"; 
                die();     
        }
    $data['time']=date('Y-m-d H:i:s');
    $conn=M('login');
    $judge=$conn->where('account='.$data['account'])->find();
    if($judge)
    {
      
       echo "<script language=JavaScript>alert('该账号已注册！');location.href='javascript:history.go(-1)';
	 </script>"; 
     die();  
    }
    $rel=$conn->add($data);
    if($rel)
    {
       echo "<script language=JavaScript>alert('等待管理员审核后可登录！');location.href='index';
	 </script>";  
     die();
    }
    else
    {
       echo "<script language=JavaScript>alert('网络故障，请稍后再试！');location.href='javascript:history.go(-1)';
	 </script>";  
     die(); 
    } 
    }
    public function home()
    {
        $this->assign('user',session('user'));
        $conn=M('activity');
        $rel=$conn->limit(0,3)->select();
        $rel1=$conn->limit(3,6)->select();
        for($i=0;$i<3;$i++)
        {
            $list1.='<div class="col-sm-4">
										<div class="single-event">
											<a href="content?id='.$rel[$i]["id"].'"><img class="img-responsive" src="/ssChen/public/cover/'.$rel[$i]['cover'].'" >
											<h4>'.$rel[$i]["title"].'</h4></a>
											
										</div>
									</div>';
        }
        for($i=0;$i<3;$i++)
        {
            $list2.='<div class="col-sm-4">
										<div class="single-event">
											<a href="content?id='.$rel1[$i]["id"].'"><img class="img-responsive" src="/ssChen/public/cover/'.$rel1[$i]['cover'].'" >
											<h4>'.$rel1[$i]["title"].'</h4></a>
											
										</div>
									</div>';
        }
        $this->assign('list1',$list1);
        $this->assign('list2',$list2);
        $this->assign('org',session('org'));
        $this->show();
        
    }
    public function moneypro()
    {
        $data['theme']=I('theme');
        $data['matter']=I('matter');
        $data['payment']=I('payment');
        if(!is_numeric($data['payment']))
        {
           echo "<script language=JavaScript>alert('请填写数字！');location.href='javascript:history.go(-1)';
	 </script>";  
     die();      
        }
        $data['submitter']=I('submitter');
        $data['time']=date('Y-m-d');
        $data['org']=I('org');
        
        
          $name=session('org');
        $org=M('organization');
        $rel=$org->where("name='".$name."'")->find();
        if(I('input')==0)
        {
             $data1['deposit']=$rel['deposit']-$data['payment'];
        }
       if(I('input')==1)
        {
           $data1['deposit']=$rel['deposit']+$data['payment'];
        }
        $org->where('name="'.$name.'"')->save($data1);
        $conn=M('money');
        if($conn->add($data))
        {
          echo "<script language=JavaScript>alert('提交成功！感谢您的支持');location.href='home';
	 </script>";  
     die();   
        }
        else
        {
          echo "<script language=JavaScript>alert('网络故障行，请稍后再试！');location.href='javascript:history.go(-1)';
	 </script>";  
     die();    
        }
        
        
        
    }
    public function content()
    {
        $id=I('id');
        $conn=M('activity');
        $rel=$conn->where("id=".$id)->find();
        $this->assign('content',$rel['content']);
        $this->display();
    }
    public function information()
    {
        $conn=M('login');
        $rel=$conn->where("account='".session('user')."'")->find();
        $this->assign('account',$rel['account']);
        $this->assign('name',$rel['name']);
        $this->assign('user',session('user'));
        $this->assign('org',$rel['org']);
        $this->display();
    }
    public function changepwd()
    {

        $data['name']=I('name');
        $password=I('password');
        $password1=I('password1');
        if($password!=$password1)
        {
          echo "<script language=JavaScript>alert('密码两次输入不一致！');location.href='javascript:history.go(-1)';
	 </script>";  
     die();     
        }
        else
        {
    
            $data['password']=md5($password);
            $conn=M('login');
           $retu=$conn->where('account="'.session('user').'"')->save($data);
           if($retu)
           {
             echo "<script language=JavaScript>alert('修改成功！');location.href='home';
	 </script>";  
  
           }
           else
           {
            echo "<script language=JavaScript>alert('网络错误！');location.href='javascript:history.go(-1)';
	 </script>";  
     die();   
           }
        }
        
        
    }
    

}