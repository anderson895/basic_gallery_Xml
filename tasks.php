<?php
// Define XML file path
$xmlFile = 'tasks.xml';

// Function to load tasks from XML file using DOMDocument
function loadTasksFromXML($file) {
    $dom = new DOMDocument();
    $dom->load($file);
    return $dom;
}

// Function to save tasks to XML file using DOMDocument
function saveTasksToXML($dom, $file) {
    $dom->formatOutput = true; // Format output with indentation
    $dom->save($file);
}

// Handle task addition
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    $newTask = trim(htmlspecialchars($_POST['task']));
    if (!empty($newTask)) {
        $dom = loadTasksFromXML($xmlFile);
        $root = $dom->documentElement;
        $taskElement = $dom->createElement('task', $newTask);
        $root->appendChild($taskElement);
        saveTasksToXML($dom, $xmlFile);
        echo 'Task added successfully'; // Debug message (can be omitted in production)
        exit; // Stop further execution after adding task
    } else {
        http_response_code(400); // Bad request if task text is empty
        echo 'Task text cannot be empty'; // Debug message (can be omitted in production)
        exit;
    }
}

// Handle task removal
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['removeTask'])) {
    $taskIndex = (int)$_POST['removeTask'];
    $dom = loadTasksFromXML($xmlFile);
    $xpath = new DOMXPath($dom);
    $tasks = $xpath->query('/tasks/task');
    
    if ($tasks->length > $taskIndex) {
        $taskToRemove = $tasks->item($taskIndex);
        $taskToRemove->parentNode->removeChild($taskToRemove);
        saveTasksToXML($dom, $xmlFile);
        echo 'Task removed successfully';
        exit; // Stop further execution after removing task
    } else {
        http_response_code(400);
        echo 'Invalid task index';
        exit;
    }
}

// Output tasks as HTML using DOMDocument
$dom = loadTasksFromXML($xmlFile);
$tasks = $dom->getElementsByTagName('task');

echo '<ul>';
foreach ($tasks as $index => $task) {
    echo '<li>' . htmlspecialchars($task->nodeValue) . ' <button onclick="removeTask(' . $index . ')">Remove</button></li>';
}
echo '</ul>';
?>
