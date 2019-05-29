<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function coreln()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or redirect('import');
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['product_code'] = $csv_line[1];
                $insert_csv['open_date'] = $csv_line[2];
                $insert_csv['int_rate'] = $csv_line[3];
                $insert_csv['penalty_rate'] = $csv_line[4];
                $insert_csv['loan_amount'] = $csv_line[5];
                $insert_csv['outstanding_bal'] = $csv_line[6];
                $insert_csv['overdue_principal'] = $csv_line[7];
                $insert_csv['interest_due_amount'] = $csv_line[8];
                $insert_csv['pri_paid'] = $csv_line[9];
                $insert_csv['penalty'] = $csv_line[10];
                $insert_csv['customer_no'] = $csv_line[11];
                $insert_csv['customer_name'] = $csv_line[12];
                $insert_csv['account_name'] = $csv_line[13];
                $insert_csv['account_status'] = $csv_line[14];

            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'product_code' => $insert_csv['product_code'],
                'open_date' => $insert_csv['open_date'],
                'int_rate' => $insert_csv['int_rate'],
                'penalty_rate' => $insert_csv['penalty_rate'],
                'loan_amount' => $insert_csv['loan_amount'],
                'outstanding_bal' => $insert_csv['outstanding_bal'],
                'overdue_principal' => $insert_csv['overdue_principal'],
                'interest_due_amount' => $insert_csv['interest_due_amount'],
                'pri_paid' => $insert_csv['pri_paid'],
                'penalty' => $insert_csv['penalty'],
                'customer_no' => $insert_csv['customer_no'],
                'customer_name' => $insert_csv['customer_name'],
                'account_name' => $insert_csv['account_name'],
                'account_status' => $insert_csv['account_status']
               );
            $data['crane_features']=$this->db->insert('coreln', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function coresv()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or redirect('import');
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['product_code'] = $csv_line[1];
                $insert_csv['open_date'] = $csv_line[2];
                $insert_csv['current_bal'] = $csv_line[3];
                $insert_csv['available_bal'] = $csv_line[4];
                $insert_csv['interest'] = $csv_line[5];
                $insert_csv['customer_no'] = $csv_line[6];
                $insert_csv['customer_name'] = $csv_line[7];
                $insert_csv['account_name'] = $csv_line[8];
                $insert_csv['account_status'] = $csv_line[9];


            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'product_code' => $insert_csv['product_code'],
                'open_date' => $insert_csv['open_date'],
                'current_bal' => $insert_csv['current_bal'],
                'available_bal' => $insert_csv['available_bal'],
                'interest' => $insert_csv['interest'],
                'customer_no' => $insert_csv['customer_no'],
                'customer_name' => $insert_csv['customer_name'],
                'account_name' => $insert_csv['account_name'],
                'account_status' => $insert_csv['account_status'],
               );
            $data['crane_features']=$this->db->insert('coresv', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function coretd()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or redirect('import');
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['product_code'] = $csv_line[1];
                $insert_csv['open_date'] = $csv_line[2];
                $insert_csv['issue_amount'] = $csv_line[3];
                $insert_csv['principal_amount'] = $csv_line[4];
                $insert_csv['interest'] = $csv_line[5];
                $insert_csv['customer_no'] = $csv_line[6];
                $insert_csv['customer_name'] = $csv_line[7];
                $insert_csv['account_name'] = $csv_line[8];
                $insert_csv['account_status'] = $csv_line[9];


            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'product_code' => $insert_csv['product_code'],
                'open_date' => $insert_csv['open_date'],
                'issue_amount' => $insert_csv['issue_amount'],
                'principal_amount' => $insert_csv['principal_amount'],
                'interest' => $insert_csv['interest'],
                'customer_no' => $insert_csv['customer_no'],
                'customer_name' => $insert_csv['customer_name'],
                'account_name' => $insert_csv['account_name'],
                'account_status' => $insert_csv['account_status'],
               );
            $data['crane_features']=$this->db->insert('coretd', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function mbwinln()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or redirect('import');
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['check_digit'] = $csv_line[1];
                $insert_csv['prtype'] = $csv_line[2];
                $insert_csv['apptype'] = $csv_line[3];
                $insert_csv['open_date'] = $csv_line[4];
                $insert_csv['pen_rate'] = $csv_line[5];
                $insert_csv['grantedamtorig'] = $csv_line[6];
                $insert_csv['grantedamt'] = $csv_line[7];
                $insert_csv['principal_amt'] = $csv_line[8];
                $insert_csv['bal_amt'] = $csv_line[9];
                $insert_csv['int_rate'] = $csv_line[10];
                $insert_csv['fixamt'] = $csv_line[11];
                $insert_csv['matdate'] = $csv_line[12];
                $insert_csv['acrintamt'] = $csv_line[13];
                $insert_csv['cumintpdamt'] = $csv_line[14];
                $insert_csv['cumnorintamt'] = $csv_line[15];
                $insert_csv['cumtaxpdamt'] = $csv_line[16];
                $insert_csv['acrpenamt'] = $csv_line[17];
                $insert_csv['cumpenpdamt'] = $csv_line[18];
                $insert_csv['inteffdate'] = $csv_line[19];
                $insert_csv['cumpripdamt'] = $csv_line[20];
                $insert_csv['over_due_pri_amt'] = $csv_line[21];
                $insert_csv['acrintoduepriamt'] = $csv_line[22];
                $insert_csv['odueintamt'] = $csv_line[23];
                $insert_csv['int_bal_amt'] = $csv_line[24];
                $insert_csv['pen_bal_amt'] = $csv_line[25];


            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'check_digit' => $insert_csv['check_digit'],
                'prtype' => $insert_csv['prtype'],
                'apptype' => $insert_csv['apptype'],
                'open_date' => $insert_csv['open_date'],
                'pen_rate' => $insert_csv['pen_rate'],
                'grantedamtorig' => $insert_csv['grantedamtorig'],
                'grantedamt' => $insert_csv['grantedamt'],
                'principal_amt' => $insert_csv['principal_amt'],
                'bal_amt' => $insert_csv['bal_amt'],
                'int_rate' => $insert_csv['int_rate'],
                'fixamt' => $insert_csv['fixamt'],
                'matdate' => $insert_csv['matdate'],
                'acrintamt' => $insert_csv['acrintamt'],
                'cumintpdamt' => $insert_csv['cumintpdamt'],
                'cumnorintamt' => $insert_csv['cumnorintamt'],
                'cumtaxpdamt' => $insert_csv['cumtaxpdamt'],
                'acrpenamt' => $insert_csv['acrpenamt'],
                'cumpenpdamt' => $insert_csv['cumpenpdamt'],
                'inteffdate' => $insert_csv['inteffdate'],
                'cumpripdamt' => $insert_csv['cumpripdamt'],
                'over_due_pri_amt' => $insert_csv['over_due_pri_amt'],
                'acrintoduepriamt' => $insert_csv['acrintoduepriamt'],
                'odueintamt' => $insert_csv['odueintamt'],
                'int_bal_amt' => $insert_csv['int_bal_amt'],
                'pen_bal_amt' => $insert_csv['pen_bal_amt'],

               );
            $data['crane_features']=$this->db->insert('mbwinln', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function mbwinsv()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or redirect('import');
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['check_digit'] = $csv_line[1];
                $insert_csv['prtype'] = $csv_line[2];
                $insert_csv['apptype'] = $csv_line[3];
                $insert_csv['account_name'] = $csv_line[4];
                $insert_csv['aliasname'] = $csv_line[5];
                $insert_csv['accstatus'] = $csv_line[6];
                $insert_csv['open_date'] = $csv_line[7];
                $insert_csv['bal_amt'] = $csv_line[8];
                $insert_csv['intrate'] = $csv_line[9];
                $insert_csv['inteffdate'] = $csv_line[10];
                $insert_csv['acrbintamt'] = $csv_line[11];
                $insert_csv['cumintpdamt'] = $csv_line[12];
                $insert_csv['cumtaxwamt'] = $csv_line[13];
                $insert_csv['int_bal_amt'] = $csv_line[14];
                $insert_csv['minperbalamt'] = $csv_line[15];

            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'check_digit' => $insert_csv['check_digit'],
                'prtype' => $insert_csv['prtype'],
                'apptype' => $insert_csv['apptype'],
                'account_name' => $insert_csv['account_name'],
                'aliasname' => $insert_csv['aliasname'],
                'accstatus' => $insert_csv['accstatus'],
                'open_date' => $insert_csv['open_date'],
                'bal_amt' => $insert_csv['bal_amt'],
                'intrate' => $insert_csv['intrate'],
                'inteffdate' => $insert_csv['inteffdate'],
                'acrbintamt' => $insert_csv['acrbintamt'],
                'cumintpdamt' => $insert_csv['cumintpdamt'],
                'cumtaxwamt' => $insert_csv['cumtaxwamt'],
                'int_bal_amt' => $insert_csv['int_bal_amt'],
                'minperbalamt' => $insert_csv['minperbalamt'],

               );
            $data['crane_features']=$this->db->insert('mbwinsv', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function mbwintd()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or redirect('import');
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['check_digit'] = $csv_line[1];
                $insert_csv['prtype'] = $csv_line[2];
                $insert_csv['apptype'] = $csv_line[3];
                $insert_csv['account_name'] = $csv_line[4];
                $insert_csv['open_date'] = $csv_line[5];
                $insert_csv['matdate'] = $csv_line[6];
                $insert_csv['term'] = $csv_line[7];
                $insert_csv['bal_amt'] = $csv_line[8];
                $insert_csv['intrate'] = $csv_line[9];
                $insert_csv['minperbalamt'] = $csv_line[10];
                $insert_csv['int_bal_amt'] = $csv_line[11];

            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'check_digit' => $insert_csv['check_digit'],
                'prtype' => $insert_csv['prtype'],
                'apptype' => $insert_csv['apptype'],
                'account_name' => $insert_csv['account_name'],
                'open_date' => $insert_csv['open_date'],
                'matdate' => $insert_csv['matdate'],
                'term' => $insert_csv['term'],
                'bal_amt' => $insert_csv['bal_amt'],
                'intrate' => $insert_csv['intrate'],
                'minperbalamt' => $insert_csv['minperbalamt'],
                'int_bal_amt' => $insert_csv['int_bal_amt'],

               );
            $data['crane_features']=$this->db->insert('mbwintd', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function migratedln()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or redirect('import');
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['old_account_no'] = $csv_line[1];
                $insert_csv['check_digit'] = $csv_line[2];
                $insert_csv['account_id'] = $csv_line[3];
                $insert_csv['product_type'] = $csv_line[4];
                $insert_csv['product_code'] = $csv_line[5];
                $insert_csv['branch'] = $csv_line[6];
                $insert_csv['loan_amount'] = $csv_line[7];
                $insert_csv['date_open'] = $csv_line[8];
                $insert_csv['disbursement_date'] = $csv_line[9];
                $insert_csv['maturity_date'] = $csv_line[10];
                $insert_csv['statusid'] = $csv_line[11];
                $insert_csv['statusdesc'] = $csv_line[12];
                $insert_csv['old_customer_id'] = $csv_line[13];
                $insert_csv['customer_id'] = $csv_line[14];
                $insert_csv['interest_balance_amount'] = $csv_line[15];
                $insert_csv['overdue_principal_amount'] = $csv_line[16];
                $insert_csv['overdue_interest_amount'] = $csv_line[17];
                $insert_csv['penalty_balance_amount'] = $csv_line[18];
                $insert_csv['principal_frequency'] = $csv_line[19];

            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'old_account_no' => $insert_csv['old_account_no'],
                'check_digit' => $insert_csv['check_digit'],
                'account_id' => $insert_csv['account_id'],
                'product_type' => $insert_csv['product_type'],
                'product_code' => $insert_csv['product_code'],
                'branch' => $insert_csv['branch'],
                'loan_amount' => $insert_csv['loan_amount'],
                'date_open' => $insert_csv['date_open'],
                'disbursement_date' => $insert_csv['disbursement_date'],
                'maturity_date' => $insert_csv['maturity_date'],
                'statusid' => $insert_csv['statusid'],
                'statusdesc' => $insert_csv['statusdesc'],
                'old_customer_id' => $insert_csv['old_customer_id'],
                'customer_id' => $insert_csv['customer_id'],
                'interest_balance_amount' => $insert_csv['interest_balance_amount'],
                'overdue_principal_amount' => $insert_csv['overdue_principal_amount'],
                'overdue_interest_amount' => $insert_csv['penalty_balance_amount'],
                'penalty_balance_amount' => $insert_csv['penalty_balance_amount'],
                'principal_frequency' => $insert_csv['principal_frequency'],

               );
            $data['crane_features']=$this->db->insert('migratedln', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function migratedsv()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or redirect('import');
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['old_account_no'] = $csv_line[1];
                $insert_csv['check_digit'] = $csv_line[2];
                $insert_csv['account_id'] = $csv_line[3];
                $insert_csv['product_type'] = $csv_line[4];
                $insert_csv['product_code'] = $csv_line[5];
                $insert_csv['branch'] = $csv_line[6];
                $insert_csv['date_open'] = $csv_line[7];
                $insert_csv['current_balance'] = $csv_line[8];
                $insert_csv['available_balance'] = $csv_line[9];
                $insert_csv['statusdesc'] = $csv_line[10];
                $insert_csv['old_alternate_customer'] = $csv_line[11];
                $insert_csv['new_alternate_customer'] = $csv_line[12];
                $insert_csv['ownership_type'] = $csv_line[13];
                $insert_csv['old_customer_id'] = $csv_line[14];
                $insert_csv['customer_id'] = $csv_line[15];
                $insert_csv['interest_bal'] = $csv_line[16];
                $insert_csv['date_last_transaction'] = $csv_line[17];
                $insert_csv['old_passbook_no'] = $csv_line[18];
                $insert_csv['new_passbook_no'] = $csv_line[19];
                $insert_csv['maturity_date'] = $csv_line[20];
                $insert_csv['effective_interest_rate'] = $csv_line[21];
                $insert_csv['term_in_days'] = $csv_line[22];

            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'old_account_no' => $insert_csv['old_account_no'],
                'check_digit' => $insert_csv['check_digit'],
                'account_id' => $insert_csv['account_id'],
                'product_type' => $insert_csv['product_type'],
                'product_code' => $insert_csv['product_code'],
                'branch' => $insert_csv['branch'],
                'date_open' => $insert_csv['date_open'],
                'current_balance' => $insert_csv['current_balance'],
                'available_balance' => $insert_csv['available_balance'],
                'statusdesc' => $insert_csv['statusdesc'],
                'old_alternate_customer' => $insert_csv['old_alternate_customer'],
                'new_alternate_customer' => $insert_csv['new_alternate_customer'],
                'ownership_type' => $insert_csv['ownership_type'],
                'old_customer_id' => $insert_csv['old_customer_id'],
                'customer_id' => $insert_csv['customer_id'],
                'interest_bal' => $insert_csv['interest_bal'],
                'date_last_transaction' => $insert_csv['date_last_transaction'],
                'old_passbook_no' => $insert_csv['old_passbook_no'],
                'new_passbook_no' => $insert_csv['new_passbook_no'],
                'maturity_date' => $insert_csv['maturity_date'],
                'effective_interest_rate' => $insert_csv['effective_interest_rate'],
                'term_in_days' => $insert_csv['term_in_days'],

               );
            $data['crane_features']=$this->db->insert('migratedsv', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function migratedtd()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or redirect('import');
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['old_account_no'] = $csv_line[1];
                $insert_csv['check_digit'] = $csv_line[2];
                $insert_csv['account_id'] = $csv_line[3];
                $insert_csv['product_type'] = $csv_line[4];
                $insert_csv['product_code'] = $csv_line[5];
                $insert_csv['branch'] = $csv_line[6];
                $insert_csv['date_open'] = $csv_line[7];
                $insert_csv['current_balance'] = $csv_line[8];
                $insert_csv['available_balance'] = $csv_line[9];
                $insert_csv['statusdesc'] = $csv_line[10];
                $insert_csv['old_alternate_customer'] = $csv_line[11];
                $insert_csv['new_alternate_customer'] = $csv_line[12];
                $insert_csv['ownership_type'] = $csv_line[13];
                $insert_csv['old_customer_id'] = $csv_line[14];
                $insert_csv['customer_id'] = $csv_line[15];
                $insert_csv['interest_bal'] = $csv_line[16];
                $insert_csv['date_last_transaction'] = $csv_line[17];
                $insert_csv['old_passbook_no'] = $csv_line[18];
                $insert_csv['new_passbook_no'] = $csv_line[19];
                $insert_csv['maturity_date'] = $csv_line[20];
                $insert_csv['effective_interest_rate'] = $csv_line[21];
                $insert_csv['term_in_days'] = $csv_line[22];

            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'old_account_no' => $insert_csv['old_account_no'],
                'check_digit' => $insert_csv['check_digit'],
                'account_id' => $insert_csv['account_id'],
                'product_type' => $insert_csv['product_type'],
                'product_code' => $insert_csv['product_code'],
                'branch' => $insert_csv['branch'],
                'date_open' => $insert_csv['date_open'],
                'current_balance' => $insert_csv['current_balance'],
                'available_balance' => $insert_csv['available_balance'],
                'statusdesc' => $insert_csv['statusdesc'],
                'old_alternate_customer' => $insert_csv['old_alternate_customer'],
                'new_alternate_customer' => $insert_csv['new_alternate_customer'],
                'ownership_type' => $insert_csv['ownership_type'],
                'old_customer_id' => $insert_csv['old_customer_id'],
                'customer_id' => $insert_csv['customer_id'],
                'interest_bal' => $insert_csv['interest_bal'],
                'date_last_transaction' => $insert_csv['date_last_transaction'],
                'old_passbook_no' => $insert_csv['old_passbook_no'],
                'new_passbook_no' => $insert_csv['new_passbook_no'],
                'maturity_date' => $insert_csv['maturity_date'],
                'effective_interest_rate' => $insert_csv['effective_interest_rate'],
                'term_in_days' => $insert_csv['term_in_days'],

               );
            $data['crane_features']=$this->db->insert('migratedtd', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function correctAllData()
    {
        $query = $this->db->query("call correctAllData()");
    }
    function correctCoreData()
    {
        $query = $this->db->query("call correctCoreData()");
    }
    function correctMbwinData()
    {
        $query = $this->db->query("call correctMbwinData()");
    }
    function correctMigratedData()
    {
        $query = $this->db->query("call correctMigratedData()");
    }




    function eraseAllData()
    {
        $query = $this->db->query("call eraseAllData()");
    }
    function eraseCoreData()
    {
        $query = $this->db->query("call eraseCoreData()");
    }
    function eraseMbwinData()
    {
        $query = $this->db->query("call eraseMbwinData()");
    }
    function eraseMigratedData()
    {
        $query = $this->db->query("call eraseMigratedData()");
    }
    function eraseValidatedData()
    {
        $query = $this->db->query("call eraseValidatedData()");
    }
    function eraseErrorData()
    {
        $query = $this->db->query("call eraseErrorData()");
    }
    function eraseInquireData()
    {
        $query = $this->db->query("call eraseInquireData()");
    }
}