#include<bits/stdc++.h>
#define task "repetitions"
using namespace std;
string s;
long m,dem;
int main(){
    if(fopen(task".inp","r")){
        freopen(task".inp","r",stdin);
        freopen(task".out","w",stdout);
    }
    getline(cin,s);
    m=1;
    dem=1;
    for(long i=1;i<s.size();i++){
        if(s[i]==s[i-1]) dem++;
        else{
            if(m<dem) m=dem;
            dem=1;
        }
    }
    if(m<dem) m=dem;
    cout<<m;
}
