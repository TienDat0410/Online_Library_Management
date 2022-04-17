'use strict'

const util = require('util')
const mysql = require('mysql')
const db = require('./db')

module.exports={
   /* create: (res, req)=>{
        let data = req.body;
        let sql = 'INSERT INTO user SET ?'
        db.query(sql, [data], (err, response) => {
            if (err) throw err
            res.send({ message: 'Insert success!' })
        });
    }*/
    create: (data, callback)=>{
        db.query(
            'INSERT INTO taikhoan(MaTK, UserName,PassWord,Quyen) values(?,?,?,?)',
            [
                data.MaTK,
                data.UserName,
                data.PassWord,
                data.Quyen,
            ],
            
                 (error,result,fields) =>{
                    if(error){
                      return  callback(error);
                    }
                    return callback(null,result[0]);
                }
                );
            },
    getUsers: callBack => {
        db.query(
            'select idUser,TKUser,NameUser,Email from user',
            [],
            (error, results, fields) =>{
                if(error){
                    return callBack(error);
                }
                return callBack(null, results);
            }

        );
    },
    getUserByUserId: (MaTK, callBack) =>{
        'select MaTK, UserName from taikhoan where MaTK= ?',
        [MaTK],
        (error, result, fields)=>{
            if(error){
                callBack(error);
            }
            return callBack(null, result[0]);
        }
    },
    updateUser: (data, callBack) => {
        db.query
        ('update taikhoan set  UserName=?, PassWord = ?, Quyen =? where MaTK =?',
        [
          //  data.MaTK,
            data.UserName,
            data.PassWord,
            data.Quyen,
            data.MaTK                    
        ],
        (error, results, fields) => {
            if(error){
                callBack(error);
            }
            return callBack(null, results[0]);
        }
        )
    },
    getUserByUserTKUser: (UserName, callBack)=>{
        db.query(
            'select * from taikhoan where UserName=?',
            [UserName],
            (error, results, fields)=>{
                if(error){
                    callBack(error);
                }
                return callBack(null, results[0]);
            }
        )
    }
    };
//}