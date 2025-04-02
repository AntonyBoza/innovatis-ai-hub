
import React, { useState, useRef, useEffect } from 'react';
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { MessageSquare, X, Send, BotIcon, User } from "lucide-react";

interface Message {
  content: string;
  sender: 'user' | 'bot';
  timestamp: Date;
}

const initialMessages: Message[] = [
  {
    content: "Hello! I'm the Innovatis AI assistant. How can I help you today?",
    sender: 'bot',
    timestamp: new Date()
  }
];

const Chatbot = () => {
  const [isOpen, setIsOpen] = useState(false);
  const [messages, setMessages] = useState<Message[]>(initialMessages);
  const [inputValue, setInputValue] = useState('');
  const [isTyping, setIsTyping] = useState(false);
  const messagesEndRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (messagesEndRef.current) {
      messagesEndRef.current.scrollIntoView({ behavior: 'smooth' });
    }
  }, [messages]);

  const toggleChat = () => {
    setIsOpen(!isOpen);
  };

  const handleSendMessage = (e: React.FormEvent) => {
    e.preventDefault();
    if (!inputValue.trim()) return;

    // Add user message
    const userMessage: Message = {
      content: inputValue.trim(),
      sender: 'user',
      timestamp: new Date()
    };
    
    setMessages(prev => [...prev, userMessage]);
    setInputValue('');
    setIsTyping(true);

    // Simulate bot response after a short delay
    setTimeout(() => {
      const botResponses = [
        "Thanks for your message! Our team will get back to you shortly.",
        "I'd be happy to tell you more about our AI solutions. What specific area are you interested in?",
        "Innovatis AI offers comprehensive consulting services. Would you like to schedule a call with one of our experts?",
        "Our predictive analytics tools can help your business anticipate market trends with high accuracy.",
        "The chatbot you're using now is an example of our conversational AI technology!"
      ];
      
      const randomResponse = botResponses[Math.floor(Math.random() * botResponses.length)];
      
      const botMessage: Message = {
        content: randomResponse,
        sender: 'bot',
        timestamp: new Date()
      };
      
      setMessages(prev => [...prev, botMessage]);
      setIsTyping(false);
    }, 1000);
  };

  return (
    <>
      {/* Chat toggle button */}
      <button
        onClick={toggleChat}
        className="fixed bottom-6 right-6 bg-innovatis-blue text-white p-4 rounded-full shadow-lg hover:bg-innovatis-blue/90 transition-all z-50"
        aria-label="Toggle chat"
      >
        {isOpen ? <X className="h-6 w-6" /> : <MessageSquare className="h-6 w-6" />}
      </button>

      {/* Chat window */}
      {isOpen && (
        <div className="fixed bottom-24 right-6 w-80 sm:w-96 bg-white rounded-xl shadow-xl z-50 flex flex-col border border-innovatis-gray-light overflow-hidden">
          {/* Chat header */}
          <div className="bg-innovatis-blue text-white p-4 flex items-center justify-between">
            <div className="flex items-center">
              <BotIcon className="h-5 w-5 mr-2" />
              <h3 className="font-medium">Innovatis AI Assistant</h3>
            </div>
            <button 
              onClick={toggleChat}
              className="text-white/80 hover:text-white transition-colors"
            >
              <X className="h-5 w-5" />
            </button>
          </div>

          {/* Chat messages */}
          <div className="flex-1 p-4 overflow-y-auto max-h-96">
            {messages.map((message, index) => (
              <div 
                key={index} 
                className={`mb-4 flex ${message.sender === 'user' ? 'justify-end' : 'justify-start'}`}
              >
                <div 
                  className={`px-4 py-2 rounded-lg max-w-[80%] ${
                    message.sender === 'user' 
                      ? 'bg-innovatis-blue text-white rounded-br-none' 
                      : 'bg-innovatis-gray-light text-innovatis-gray-dark rounded-bl-none'
                  }`}
                >
                  <div className="flex items-center mb-1">
                    {message.sender === 'bot' ? (
                      <BotIcon className="h-3 w-3 mr-1" />
                    ) : (
                      <User className="h-3 w-3 mr-1" />
                    )}
                    <span className="text-xs opacity-70">
                      {message.sender === 'bot' ? 'AI Assistant' : 'You'}
                    </span>
                  </div>
                  <p>{message.content}</p>
                </div>
              </div>
            ))}
            {isTyping && (
              <div className="flex justify-start mb-4">
                <div className="px-4 py-2 bg-innovatis-gray-light text-innovatis-gray-dark rounded-lg rounded-bl-none max-w-[80%]">
                  <div className="flex space-x-1">
                    <div className="w-2 h-2 bg-innovatis-gray-dark/60 rounded-full animate-bounce"></div>
                    <div className="w-2 h-2 bg-innovatis-gray-dark/60 rounded-full animate-bounce" style={{ animationDelay: "0.2s" }}></div>
                    <div className="w-2 h-2 bg-innovatis-gray-dark/60 rounded-full animate-bounce" style={{ animationDelay: "0.4s" }}></div>
                  </div>
                </div>
              </div>
            )}
            <div ref={messagesEndRef} />
          </div>

          {/* Chat input */}
          <form onSubmit={handleSendMessage} className="border-t border-innovatis-gray-light p-3 flex">
            <Input
              value={inputValue}
              onChange={(e) => setInputValue(e.target.value)}
              placeholder="Type a message..."
              className="flex-1 mr-2"
            />
            <Button 
              type="submit" 
              size="icon" 
              disabled={!inputValue.trim()}
              className="bg-innovatis-blue text-white hover:bg-innovatis-blue/90"
            >
              <Send className="h-4 w-4" />
            </Button>
          </form>
        </div>
      )}
    </>
  );
};

export default Chatbot;
