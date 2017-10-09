<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 *
 * @method \App\Model\Entity\Item[] paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Search.Prg', [
            // This is default config. You can modify "actions" as needed to make
            // the PRG component work only for specified methods.
            'actions' => ['index', 'lookup']
        ]);
    }
    public function index()
    {
        // $this->paginate = [
        //     'contain' => ['Users']
        // ];
        // $items = $this->paginate($this->Items);

        // $this->set(compact('items'));
        // $this->set('_serialize', ['items']);
        $query = $this->Items
            // Use the plugins 'search' custom finder and pass in the
            // processed query params
            ->find('search', ['search' => $this->request->query])
            // You can add extra things to the query if you need to
            ->contain(['Users'])
            ->where([]);

        $this->set('items', $this->paginate($query));
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('item', $item);
        $this->set('_serialize', ['item']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function upload()
    {
        $item = $this->Items->newEntity();   
            if ($this->request->is('post')) {
                $item = $this->Items->patchEntity($item, $this->request->getData());
                $error = [];
                // if ($this->CmsUploads->save($cmsUpload)) {
                    // $cmsUpload->cms_detail_id = $_GET['did'];
                    // $pcid = $_GET['pcid'];
                    // $uploadPathImg = 'uploads/';
                    $uploadPath =  'uploads';
                    $filename = 'mariweb.csv';
                    array_map('unlink', glob($uploadPath.'/'.$filename));
                    if (!file_exists($uploadPath)) {
                            mkdir($uploadPath, 0777, true);
                    }
                    $data =  $this->request->getData();
                    // var_dump($data);
                    // exit;
                    $save = move_uploaded_file($data['submittedfile']['tmp_name'], $uploadPath.'/'.$filename);
                    if($save){
                        $rows = array_map('str_getcsv', file($uploadPath.'/'.$filename));
                        $header = array_shift($rows);
                        $csv = array();
                        $j = 0;
                        foreach($rows as $key=>$row) {

                            if(count($header) != count($row)){
                            //     var_dump($header);
                            //     var_dump($row);
                            // exit;
                                // array_push($, var)
                                // continue;
                            }
                        try{
                        $csv[] = array_combine($header, $row);
                        $j ++;
                        $item = $this->Items->newEntity();
                        $Item = [];
                        $item = $this->Items->patchEntity($item, $Item);
                        $Item['aton_type'] = utf8_encode($csv[$key]['ATON type']);
                        $Item['class'] = utf8_encode($csv[$key]['Class']);
                        $Item['type_of_ship'] = utf8_encode($csv[$key]['Type of ship']);
                        $Item['mmsi'] = utf8_encode($csv[$key]['MMSI']);
                        $Item['imo_number'] = utf8_encode($csv[$key]['IMO number']);
                        $Item['call_sign'] = utf8_encode($csv[$key]['Call sign']);
                        $Item['name'] = utf8_encode($csv[$key]['Name']);
                        $Item['destination'] = utf8_encode($csv[$key]['Destination']);
                        $Item['electronic_fixing_device'] = utf8_encode($csv[$key]['Electronic fixing device']);
                        $Item['eta'] = utf8_encode($csv[$key]['Eta']);
                        $Item['max_draught'] = utf8_encode($csv[$key]['Max draught']);
                        $Item['latitude'] = utf8_encode($csv[$key]['Latitude (DDMM.mmmm)']);
                        $Item['longitude'] = utf8_encode($csv[$key]['Longitude (DDDMM.mmmm)']);
                        $Item['sog'] = utf8_encode($csv[$key]['SOG (knts)']);
                        $Item['rot'] = utf8_encode($csv[$key]['ROT (deg/min)']);
                        $Item['cog'] = utf8_encode($csv[$key]['COG (deg)']);
                        $Item['true_heading'] = utf8_encode($csv[$key]['True heading']);
                        $Item['navigation_status'] = utf8_encode($csv[$key]['Navigational status']);
                        $Item['dimension_a'] = utf8_encode($csv[$key]['DimensionA']);
                        $Item['dimension_b'] = utf8_encode($csv[$key]['DimensionB']);
                        $Item['dimension_c'] = utf8_encode($csv[$key]['DimensionC']);
                        $Item['dimension_d'] = utf8_encode($csv[$key]['DimensionD']);
                        $Item['msg_type'] = utf8_encode($csv[$key]['Msg type']);
                        $Item['port'] = utf8_encode($csv[$key]['Port']);
                        $Item['date_time_stamp'] = utf8_encode($csv[$key]['Date time stamp']);
                        // $item = $this->Items->newEntity(); 
                        $item = $this->Items->patchEntity($item, $Item);
                        if ($this->Items->save($item)) {

                            // var_dump($this->Items);
                            // $this->Flash->success(__('New upload has been saved.'));
                            // return $this->redirect(['controller' => 'cmsPettycashHeaders', 'action' => 'edit', $pcid]);
                        }
                        }catch (Exception $e){
                            
                        }

                        
                        // exit;

                        //     $check = $this->EmpPersonalInfo->checkIfEmpExist();
                        //     $jsonCheck = json_decode($check);
                        //     $this->set('jsonCheck',$jsonCheck);
                        //     // echo $jsonCheck->resource[0]->created_date;
                        //     if($jsonCheck->resource[0]->employee_number == $this->EmpPersonalInfo->employee_number){
                        //         $isExist[] = ['employee_number' => $this->EmpPersonalInfo->employee_number,
                        //             'first_name' => $this->EmpPersonalInfo->first_name,
                        //             'last_name' => $this->EmpPersonalInfo->last_name,
                        //             'exist_first_name' => $jsonCheck->resource[0]->first_name,
                        //             'exist_last_name' => $jsonCheck->resource[0]->last_name,
                        //             'exist_created_date' => $jsonCheck->resource[0]->created_date,
                        //             'seq_id' => $j,
                        //             ];
                        //     }
                        //     else{
                        //         // $check = $this->EmpPersonalInfo->InsertDemographic();
                        //         $isInserted[] = ['employee_number' => $this->EmpPersonalInfo->employee_number,
                        //             'first_name' => $this->EmpPersonalInfo->first_name,
                        //             'last_name' => $this->EmpPersonalInfo->last_name,
                        //             'seq_id' => $j,
                        //             ];
                        //     }
                        //     if ($this->request->is('post') || $this->request->is('put')) {

                        //     }
                        }
                        // array_map('unlink', glob($uploadPath.'/'.$filename));

                        // $cmsUpload->path = $uploadPathImg.$cmsUpload->cms_detail_id.'/'.$filename;
                        // if ($this->CmsUploads->save($cmsUpload)) {
                        //     $this->Flash->success(__('New upload has been saved.'));
                        //     return $this->redirect(['controller' => 'cmsPettycashHeaders', 'action' => 'edit', $pcid]);
                        // }
                    }
                // }
                // $this->Flash->error(__('The upload could not be saved. Please, try again.'));
            }
            // $cmsDetails = $this->CmsUploads->CmsDetails->find('list', ['limit' => 200]);
            $this->set(compact('item'));
            $this->set('_serialize', ['item']);
    }
}
