const{create, updateUser,getUserByUserTKUser, getUserByUserId, getUsers}=require("./user.service");
const{updatetaikhoan,creatuser}=require("./ProductsController");
const{genSaltSync, hashSync, compareSync}=require("bcrypt");
const {sign}=require("jsonwebtoken");


module.exports={
    creatuser: (req,res)=>{
        const body= req.body;
        const salt = genSaltSync(10);
        body.PassWord=hashSync(body.PassWord, salt);
       // body.MKU(body.MKUser, salt);
        create(body, (err,result)=>{
            if(err){
                console.log(err);
                return res.status(500).json({
                    success: 0,
                    message: "error"
                });
            }
            return res.status(200).json({
                success: 1,
                data: result
            });
        });
    },
    getUserByUserId:(req, res)=>{
        const idUser =req.params.idUser;
        getUserByUserId(idUser,(err, results)=>{
            if(err){
                console.log(err);
                return;
            }
            if(!results){
                return res.json({
                    success: 0,
                    message: "record not found"
                });
            }
            return res,json({
                success: 1,
                data: results
            });
        });

    },
    getUsers: (req, res)=>{
        getUsers((err,results)=>{
            if(err){
                console.log(err);
                return;
            }
            return res.json({
                success: 1,
                data: results
            });
        });
    },
    updateUsers: (req, res) => {
        const body = req.body;
        const salt = genSaltSync(10);
        body.PassWord = hashSync(body.PassWord, salt);
        updateUser(body, (err, results) => {
            if(err){
                console.log(err);
                return;
            }
            return res.json({
                success: 1,
                message: "updated successfully"
            });
        });
    },
    login: (req, res)=>{
        const body = req.body;
        getUserByUserTKUser(body.UserName, (err, results)=>{
            if(err){
                console.log(err);
            }
            if(!results){
                return res.json({
                    success: 0,
                    data:"invalid tai khoan or password"
                });
            }
            const result = compareSync(body.PassWord, results.PassWord);
            if(result){
                results.PassWord= undefined;
                const jsontoken = sign({result: results}, "qwe1234",{expiresIn: "1h"
            });
            return res.json({
                success: 1,
                message:"login successfully",
                token: jsontoken
            });            
            }else{
                return res.json({
                    success: 0,
                    data:"invalid username or password"
                });
            }
        });
    },
};
