<?php
namespace Masl\Bundle\MPTBundle\Controller;
/*Пространство имен - отражает физический путь к контроллеру от папки src */

/* Конструкция use подключает сторонний модуль */
//Бзаовый контролле Symfony
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//базовый запрос HTTP
use Symfony\Component\HttpFoundation\Request;
//базовый ответ
use Symfony\Component\HttpFoundation\Response;
use Masl\Bundle\MPTBundle\Entity\Document;

//Класс нашего контроллера наследует методы базового класса
class FilesController extends Controller
{
    /**
     * Одна из операций контроллера - uploadAction
     * Отвечает за показ формы загрузки файла
     * и обработку предъявлений этой формы
     */
    public function uploadAction(Request $request)
    {
        //Создаем новый объект класса Document
        //который взят из папки Entity
        $document = new Document();
        $document->setName('Test');
        
        //Создаем объект строителя форма
        //которому даем команды на добавление на форму некоторых полей
        //Метод getForm заставит "строителя" вернуть построенную им форму. Она сохранитсяв $form
        //Эта форма не является HTML-строкой, это совокупность сложных объектов
        $form = $this->createFormBuilder($document)
            ->add('name', 'email')
            //->add('file', 'file')
            ->add('upload', 'submit')
            ->getForm();
        //Обработка запроса
        //Запрос мог быть выполнен любым методом HTTP, например, GET.POST
        $form->handleRequest($request);
        //Если форма была предъявлен указанным методом (по умолчанию POST).
        if ($form->isValid()) {
            //Какая-то логика обработки формы
            
            //Сообщение об успешной обработке формы
            return new Response($document->getName());
        }
        
        // Функция рендеринга шаблонов
        // 'use MaslMPTBundle:Forms:upload.html.twig' - это путь
        //MaslMPTBundle - это ID поставки
        //Forms - это папка внутри Resource/views
        //upload.html.twig - это имя файла (шаблона)
        return $this->render('MaslMPTBundle:Forms:upload.html.twig', [
            //В шаблон передаем форму, готовую к преобразованию в html
            //Внутри шаблона форма будет храниться в переменной upload_form
            'upload_form' => $form->createView()
        ]);
    }
}