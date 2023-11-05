<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class NewsController extends BaseController
{
    public function index()
    {
        $fetchNews = new NewsModel();
        $data['news'] = $fetchNews->findAll();
        return view('news/list', $data);
    }

    public function createNews()
    {
        return view('news/add');
    }

    public function storeNews()
    {
       $insertNews = new NewsModel();
       $data = array(
        'TITLE' => $this->request->getPost('TITLE'),
        'DESCRIPTION' => $this->request->getPost('DESCRIPTION'),
        'AUTHOR' => $this->request->getPost('AUTHOR')
       );
    
       $insertNews->insert($data);
       return redirect()->to('/news')->with('success', 'Student Added Successfully!');
    }
    
    public function editNews($NEWSID)
    {
    $fetchNews = new NewsModel();
    $data['news'] = $fetchNews->where('NEWSID', $NEWSID)->first();
    return view('news/edit', $data);
    }

    public function updateNews($NEWSID)
    {
        $updateNews = new NewsModel();
        $data = array(
            'TITLE' => $this->request->getPost('TITLE'),
            'DESCRIPTION' => $this->request->getPost('DESCRIPTION'),
            'AUTHOR' => $this->request->getPost('AUTHOR')
        );
    
        $updateNews->update($NEWSID, $data);
        return redirect()->to('/news')->with('success', 'News Updated Successfully!');
    }
    

    public function deleteNews($NEWSID)
    {
        $deleteNews = new NewsModel();
        $deleteNews->delete($NEWSID);
        return redirect()->to('/news')->with('success', 'News Deleted Successfully!');
    }
}
