<?php 
namespace App\Http\Controllers\Slim;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use App\Models\Event;
use App\Models\Place;
use App\Models\EventType;
use Carbon\Carbon;


class EventSLIMController extends BaseController{

    public function __construct(ContainerInterface $container){
        if(!isset(static::$home))
        parent::__construct($container);
    }


    public function createEvent(Request $request, Response $response, $args) {
        $params = $request->getParsedBody();
        $directory_image = $this->container->get('upload_directory_events');
        $directory_program = $this->container->get('upload_directory_programs');
        $uploadedFiles = $request->getUploadedFiles();
        $user = Admin::where('id',$_SESSION['adm_user'])->first();
        if($user->role == 1){
            if(count($params)>0){
                var_dump($_FILES['event_image']);
                if($_FILES['event_image']['name'] != ''){
                    $portada = $uploadedFiles['event_image'];
                    if ($portada->getError() === UPLOAD_ERR_OK) {
                        $filename = moveUploadedFile($directory_image, $portada);
                        $file_path = '/images/event/'.$filename;
                    }
                }else{//si portada es vacío dejo una fixeada
                    $file_path = '/images/event/event-details.jpg';
                }

                if($_FILES['program']['name'] != ''){
                    $programa = $uploadedFiles['program'];
                    if ($programa->getError() === UPLOAD_ERR_OK) {
                        $filename_programa = moveUploadedFile($directory_program, $programa);
                        $file_path_programa = 'files/programs/'.$filename_programa;
                    }
                }else{//si file es vacio
                    $file_path_programa = '';
                }
            }
            
            $event = Event::create([
                'title' => $params['title'],
                'content' => $params['content'],
                'date' => $params['date'],
                'modality' => $params['modality'],
                'workload' => $params['workload'],
                'id_place' => $params['place'],
                'tariff' => $params['tariff'],
                'inscription' => $params['inscription'],
                'contact' => $params['contact'],
                'id_type' => $params['type'],
                'level' => $params['level'],
                'program' => $file_path_programa,
                'file_path'=> $file_path,
                //'detail'=> $params['detail'],
                'active'=> 1,
            ]);
      
            $payload = json_encode($params);
            $response->getBody()->write($payload);

            return $response->withHeader('Location', '/admin/eventos')->withStatus(302);
        }else{
            $payload = json_encode($artist);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401);
        }
    }
    
    public function postEventActive(Request $request, Response $response, $args) {
        $params = $request->getParsedBody();
        
        $user = Admin::where('id',$_SESSION['adm_user'])->first();
        if(($user->role == 1) || ($user->event == $params['id'])){
            Event::where('id',$params['id'])->update([
                'active' => $params['value']
            ]);
            
            $payload = json_encode($params);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(201);
        }else{
            $payload = json_encode($artist);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401);
        }
    }

    public function postEventLevel(Request $request, Response $response, $args) {
        $params = $request->getParsedBody();
        
        $user = Admin::where('id',$_SESSION['adm_user'])->first();
        if(($user->role == 1) || ($user->event == $params['id'])){
            Event::where('id',$params['id'])->update([
                'level' => $params['value']
            ]);
            
            $payload = json_encode($params);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(201);
        }else{
            $payload = json_encode($artist);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401);
        }
    }
    public function postEventModality(Request $request, Response $response, $args) {
        $params = $request->getParsedBody();
        
        $user = Admin::where('id',$_SESSION['adm_user'])->first();
        if(($user->role == 1) || ($user->event == $params['id'])){
            Event::where('id',$params['id'])->update([
                'modality' => $params['value']
            ]);
            
            $payload = json_encode($params);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(201);
        }else{
            $payload = json_encode($artist);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401);
        }
    }
    

    public function getModalEditComponent(Request $request, Response $response, $args) {
        // $params = $request->getParsedBody();
        $params = $request->getQueryParams();
        
        $user = Admin::where('id',$_SESSION['adm_user'])->first();
        if($user->role != 1){
            if(isset($params['id'])){
                $component = CompanyPageComponent::where('id',$params['id'])->first();
            }else{
                return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withStatus(401);
            }
            
            return view($response,'admin.components.modals.edit-component',compact('component','user'));
        }else{
            $payload = json_encode($artist);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401);
        }
    }


    public function getEventModalEdit(Request $request, Response $response, $args) {
        // $params = $request->getParsedBody();
        $params = $request->getQueryParams();
        
        $user = Admin::where('id',$_SESSION['adm_user'])->first();
        if($user->role == 1){
            if(isset($params['id'])){
                $event = Event::where('id',$params['id'])->first();
                $places = Place::select('id','name')->get(); // Para poder mostrar en el agregar evento
                $types = EventType::select('id','name')->get();
            }else{
                return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withStatus(401);
            }
            
            return view($response,'admin.components.modals.edit-event',compact('event','user','places','types'));
        }else{
            $payload = json_encode($artist);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401);
        }
    }

  

    public function getEvent(Request $request, Response $response, $args){
        
        $event = Event::join('place',"event.id_place","=","place.id")
        ->join('event_type',"event.id_type","=","event_type.id")
        ->where('event.id',$args['id'])->first();
        return view($response,'event',compact('event'));
    }

    public function getAllEvents(Request $request, Response $response, $args){
        
        $events = Event::join('place',"event.id_place","=","place.id")
        ->join('event_type',"event.id_type","=","event_type.id")
        ->select('event.*', 'place.name', 'event_type.name')
        ->where('active','1')
        // ->whereDate('date','>=',Carbon::now())
        ->where('active','1')
        ->orderBy('date','DESC')
        ->skip(0)->take(20)->get();
     
        return view($response,'events_all',compact('events'));
    }

    public function getEvents(Request $request, Response $response, $args){
        
        $events = Event::join('place',"event.id_place","=","place.id")
        ->join('event_type',"event.id_type","=","event_type.id")
        ->select('event.*', 'place.name', 'event_type.name')
        ->where('active','1')
        ->orderBy('date','DESC')
        ->skip(0)->take(5)->get();
     
        return view($response,'events',compact('events'));
    }

    
    public function editEvent(Request $request, Response $response, $args) {
        $params = $request->getParsedBody();
        $directory_image = $this->container->get('upload_directory_events');
        $directory_program = $this->container->get('upload_directory_programs');
        $uploadedFiles = $request->getUploadedFiles();
        $user = Admin::where('id',$_SESSION['adm_user'])->first();
        $event = Event::where('id',$params['event_id'])->first();
        if($user->role == 1){
            if(count($params)>0){
                if($_FILES['event_image']['name'] != ''){
                    $portada = $uploadedFiles['event_image'];
                    if ($portada->getError() === UPLOAD_ERR_OK) {
                        $filename = moveUploadedFile($directory_image, $portada);
                        $file_path = '/images/event/'.$filename;
                    }
                }else {
                    $file_path = $params['has_file'];
                }

                if($_FILES['program']['name'] != ''){
                    $programa = $uploadedFiles['program'];
                    if ($programa->getError() === UPLOAD_ERR_OK) {
                        $filename_program = moveUploadedFile($directory_program, $programa);
                        $file_path_program = 'files/programs/'.$filename_program;
                    }
                }else {
                    $file_path_program = $params['has_program'];
                }
            }
            $event->update([
                'title' => $params['title'],
                'content' => $params['content'],
                'date' => $params['date'],
                'file_path'=> $file_path,
                'program' => $file_path_program,
                'workload' => $params['workload'],
                'tariff' => $params['tariff'],
                'inscription' => $params['inscription'],
                'contact' => $params['contact'],
                'id_place' => $params['place'],
                'id_type' => $params['type'],
            ]);
      
            $payload = json_encode($params);
            $response->getBody()->write($payload);

            return $response->withHeader('Location', '/admin/eventos')->withStatus(302);
        }else{
            $payload = json_encode($artist);
            $response->getBody()->write($payload);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401);
        }
    }

    public function getPlaces(Request $request, Response $response, $args){
        
        $places = Place::select('name')->all();
     
        return $places;
    }

    public static function getNextEvent(){
        $next_event = Event::whereDate('date','>=',Carbon::now()->subHours(5))->orderBy('date','ASC')->first();
        
        return $next_event;
    }
}