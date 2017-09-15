#DESIGN PATTERNS

##CREATIONAL

###Abstract Factory (factory definition first, family of related objects)
*   must be subclassed
*   abstract what is common for all classesj
*   client calls concrete class
###Factory Method 
*   without family relation
*   let subclass decide what to instantiate
###Builder    
*   build complex object in steps with common instructions
###Prototype (__clone to other slot of memory,delegation)
###Singleton (class has only one instance, with global point of access)

##STRUCTURAL(compositional, logic internal to the structure, wrappers)
###Decorator 
*   smart proxy
*   wrapped in constructor
*   inheritance is not feasible because it is static and applies to an entire class
*   decorate object at run-time,
*   more flexible then inheritance
*   same interface as wrapped class
*   alternative to subclassing
*   must be a subclass of wrapped interface/object
###Proxy 
*   limit access
*   surrogate for another object/
*   same interface as wrapped class
*   wrapped may not exist
*   no object in constructor
###Bridge 
*   more complex variation of adapter
*   run-time binding of the implementation
*   makes things work before design
*   common interface
*   decouple an abstraction from implementation/orthogonal
###Adapter 
*   convert interface into one that clients expect (for one or many objects)
*   different interface from wrapped class(derived)
*   exposes only releveant methods to client
###Facade 
*   higher level interface (for one or many objects)
*   different interface 
###Composite (composite/leaf, recursive composition)
###Flyweight (sharing expensive resources)
*   share what is common (intrinsic)
*   extrinsic

##Behavioral (decompositional, external to structure, sernder/receiver)

###Observer 
*   one to many
*   observer is registered
*   view example
*   query for subject state
*   pull
###Mediator 
*   encapsulates communication between multiple objects
###Strategy (interchangeable algorithms)
*   code to an interface (different algorithm implementation?)
###Command 
*   invoker/receiver paradigm
*   execute command on receiver
###Chain (multiple handlers for request/next)
###Iterator (access aggregate object without internals)
###Memento 
*   bookmark
*   capture objects internal state/for restoring state
*   snapshot
###State 
*   in a context
*   finite numbet of states
*   change behaviour depending on state
*   extract state into different classes
*   order of state change
*   transition to state
###Template Method (algorithm skeleton in a base class)
###Visitor (define new operation without changing classes/recursive structure)
###Interpreter


#MY EXPLANATIONS

##Creational
###Abstract Factory
*   Expose abstract method factory name (to client) 
*   Encapsulate creation process (hidden from client)
*   Required subclassing
*   Client is calling subclass (which encapsulate instantiation of objects)
###Factory method
*   Similar to abstract factory 
*   Subclass has more freedom (what to instantiate)
*   Choice is given to client
###Builder
*   Build object in steps
*   Director and builder
*   Builder is calling dependente object (what to build)
*   Director is calling builder
*   Client is calling director
###Singleton
*   Only one instance 
*   Global access (static)

##Structural
###Adapter
*   True wrapper example (encapsulation)
*   Wrapper for dependency object
*   Client calls wrapper methods which forwards to adapted code
